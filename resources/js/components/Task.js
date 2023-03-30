import DeleteIcon from '@mui/icons-material/Delete';
import AddCircleOutlineIcon from '@mui/icons-material/AddCircleOutline';
import { Card, CardHeader, CardContent, List, TextField, CardActions, IconButton } from "@mui/material";
import React, { useState } from 'react';
import { useUpdateTaskMutateTask, useDeleteTaskMutateTask} from "../hooks/Task";
import { useStoreTaskItemMutateTask } from "../hooks/TaskItem";
import TaskItem from "./TaskItem";

function Task(props) {
    const [timer, setTimer] = useState(null);
    
    let task = {
        id: props.task.id,
        title: props.task.title,
    };
    
    /** 名称変更*/
    const { updateTaskMutation } = useUpdateTaskMutateTask();
    const eventUpdateTask = (event) => {
        clearTimeout(timer);
    
            const newTimer = setTimeout(() => {
                let data = {
                    ...task,
                    title: event.target.value,
                };
                updateTaskMutation.mutate(data);
            }, 500);
    
            setTimer(newTimer);
    
    };
    
    /** 削除ボタン*/
    const { deleteTaskMutation} = useDeleteTaskMutateTask();
    const eventDeleteTask = (event) => {
        deleteTaskMutation.mutate(task);
    };
    
    /** アイテム追加ボタン*/
    const { storeTaskItemMutation} = useStoreTaskItemMutateTask();
    const eventStoreTaskItem = (event) => {
        storeTaskItemMutation.mutate(task);
    };
    
    return (
        <Card>
            <TextField
                variant="standard"
                margin="dense"
                defaultValue={props.task.title}
                fullWidth
                onChange={ eventUpdateTask }
                />
            <CardContent>
                <List>
                    {props.task.task_items.map((item) => {
                        return <TaskItem key={item.id} item={item} />;
                    })}
                </List>
            </CardContent>
            <CardActions>
                <IconButton
                    edge="start"
                    aria-label="add"
                    color="primary"
                    onClick={ eventStoreTaskItem }
                >
                    <AddCircleOutlineIcon />
                </IconButton>
                <IconButton 
                    edge="end" 
                    aria-label="delete"
                    onClick={ eventDeleteTask }
                 >
                    <DeleteIcon />
                </IconButton>
            </CardActions>
        </Card>    
    );
}

export default Task;