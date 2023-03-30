import axios from "axios";
import { useMutation, useQueryClient } from "react-query";

const useUpdateTaskMutateTask = () => {
    const queryClient = useQueryClient();
    const updateTaskMutation = useMutation(
        (task) => axios.put("/api/tasks/" + task.id, { title: task.title}),
        {
            onMutate: async (task) => {
                
                await queryClient.cancelQueries("taskList");
                
                const previousTaskList = queryClient.getQueriesData("taskList");
                
                queryClient.setQueryData("taskList", (oldTaskList) =>
                    oldTaskList.map((oldTask) => {
                        if (oldTask.id == task.id) {
                            return {
                                ...oldTask,
                                title: task.title,
                            };
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
    return { updateTaskMutation };
};

export default useUpdateTaskMutateTask;