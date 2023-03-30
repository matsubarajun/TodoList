import { useQueryClient } from "react-query"

const useCurrentTaskList = () => {
    const queryClient = useQueryClient();
    return queryClient.getQueryData("taskList");
}

export default useCurrentTaskList;