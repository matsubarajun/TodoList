import axios from "axios";
import { useMutation, useQueryClient } from "react-query";

const useDeleteTaskMutateTask = () => {
    const queryClient = useQueryClient();
    const deleteTaskMutation = useMutation(
        (task) => axios.delete("/api/tasks/" + task.id),
        {
            onSettled: () => {
                queryClient.invalidateQueries("taskList");
            },
        }    
    );
    return { deleteTaskMutation };
};

export default useDeleteTaskMutateTask;