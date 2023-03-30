import axios from "axios";
import { useMutation, useQueryClient } from "react-query";

const useStoreTaskItemMutateTask = () => {
    const queryClient = useQueryClient();
    const storeTaskItemMutation = useMutation(
        (task) => 
            axios.post("/api/taskItems", {
                task_id: task.id, 
                name: null,
            }),
        {
            onSettled: () => {
                queryClient.invalidateQueries("taskList");
            }
        }    
    );
    return { storeTaskItemMutation };
};

export default useStoreTaskItemMutateTask;