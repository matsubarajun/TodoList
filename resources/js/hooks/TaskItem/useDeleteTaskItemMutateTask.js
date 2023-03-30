import axios from "axios";
import { useMutation, useQueryClient } from "react-query";

const useDeleteTaskItemMutateTask = () => {
    const queryClient = useQueryClient();
    const deleteTaskItemMutation = useMutation(
        (taskItem) => axios.delete("/api/taskItems/" + taskItem.id),
        {
            onMutate: async (taskItem) => {
                
                await queryClient.cancelQueries("taskList");
                
                const previousTaskList = queryClient.getQueriesData("taskList");
                
                queryClient.setQueryData("taskList", (oldTaskList) =>
                    oldTaskList.map((oldTask) => {
                        let newTaskItems = [];
                        oldTask.task_items.map((oldTaskItem) => {
                            if (oldTaskItem.id != taskItem.id) {
                                newTaskItems.push(oldTaskItem);
                            }
                            
                        });
                        oldTask.task_items = newTaskItems;
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
    return { deleteTaskItemMutation };
};

export default useDeleteTaskItemMutateTask;