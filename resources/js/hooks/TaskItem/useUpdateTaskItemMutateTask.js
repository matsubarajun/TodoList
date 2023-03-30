import axios from "axios";
import { useMutation, useQueryClient } from "react-query";

const useUpdateTaskItemMutateTask = () => {
    const queryClient = useQueryClient();
    const updateTaskItemMutation = useMutation(
        (taskItem) => 
            axios.put("/api/taskItems/" + taskItem.id, {
                name: taskItem.name, 
                completed_flag: taskItem.completed_flag, 
            }),
        {
            onMutate: async (taskItem) => {
                
                await queryClient.cancelQueries("taskList");
                
                const previousTaskList = queryClient.getQueriesData("taskList");
                
                queryClient.setQueryData("taskList", (oldTaskList) =>
                    oldTaskList.map((oldTask) => {
                        if (oldTask.id == taskItem.id) {
                            let newTaskItems = [];
                            oldTask.task_items.map((oldTaskItem) => {
                                if (oldTaskItem.id == taskItem.id) {
                                    newTaskItems.push({
                                        ...oldTaskItem,
                                        name: taskItem.name,
                                        completed_flag: taskItem.completed_flag,
                                    });
                                } else {
                                    newTaskItems.push(oldTaskItem);
                                }
                            });
                            oldTask.task_items = newTaskItems;
                        }
                        return oldTask;
                    })
                );
                return { previousTaskList };
            },
            onSettled: () => {
                queryClient.invalidateQueries("taskList");
            }
        }    
    );
    return { updateTaskItemMutation };
};

export default useUpdateTaskItemMutateTask