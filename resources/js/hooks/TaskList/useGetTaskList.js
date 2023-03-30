const { default: axios} = require("axios")
const { useQueryClient, useQuery } = require("react-query");

const getTaskList = async () => {
    const { data } = await axios.get("/api/tasks");
    return data;
}

const useGetTaskList = () => {
    const queryClient = useQueryClient();
    return useQuery("taskList",getTaskList, {
        onError: () => {
            queryClient.setQueryData("taskList", null);
        }
    });
}

export default useGetTaskList;