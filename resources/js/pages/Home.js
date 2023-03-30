import { Grid } from "@mui/material";
import React from 'react';
import ReactDOM from 'react-dom';
import Task from "../components/Task";
import { useCurrentTaskList, useGetTaskList } from "../hooks/TaskList";

function Home() {
    const { isLoading } = useGetTaskList();
    const taskList = useCurrentTaskList();
    if (isLoading) return "Now Loading....";
    return (
        <Grid container spacing={2}>
            {taskList.map((task) => (
                <Grid item key={task.id} xs={3}>
                    <Task task={task} />
                </Grid>
            ))}
        </Grid>
    );
}

export default Home;
