import DeleteIcon from '@mui/icons-material/Delete';
import { ListItem, ListItemButton, ListItemText, IconButton, Checkbox, ListItemIcon, TextField } from "@mui/material";
import React, { useState } from 'react';
import { useUpdateTaskItemMutateTask, useDeleteTaskItemMutateTask } from "../hooks/TaskItem";

function TaskItem(props) {
    const [timer, setTimer] = useState(null);
    
    let taskItem = {
        id: props.item.id,
        name: props.item.name,
        completed_flag: props.item.completed_flag,
        task_id: props.item.task_id,
    };
    
    /** 名称更新*/
    const { updateTaskItemMutation } = useUpdateTaskItemMutateTask();
    const eventUpdateTaskItem = (event) => {
        clearTimeout(timer);
    
            const newTimer = setTimeout(() => {
                let data = {
                    ...taskItem,
                    name: event.target.value,
                };
                updateTaskItemMutation.mutate(data);
            }, 500);
    
            setTimer(newTimer);
    
    };
    
    /** チェックボックス*/
    const eventCheckTaskItem = (event) => {
        let data = {
            ...taskItem,
            completed_flag: event.target.checked,
        };
        updateTaskItemMutation.mutate(data);
    };
    
    /** 削除ボタン*/
    const { deleteTaskItemMutation} = useDeleteTaskItemMutateTask();
    const eventDeleteTaskItem = (event) => {
        deleteTaskItemMutation.mutate(taskItem);
    };
    
    
    return(
        <ListItem 
            key={props.item.id}
            secondaryAction={
              <IconButton 
                edge="end" 
                 aria-label="delete"
                 onClick={ eventDeleteTaskItem }
              >
                <DeleteIcon />
              </IconButton>
            }
            disablePadding
        >   
            <ListItemButton>
                <ListItemIcon>
                    <Checkbox edge="start"
                    checked={props.item.completed_flag }
                    onChange={ eventCheckTaskItem }
                    />
                </ListItemIcon>
                <TextField
                variant="standard"
                margin="dense"
                defaultValue={props.item.name}
                fullWidth
                onChange={ eventUpdateTaskItem }
                />
            </ListItemButton>
        </ListItem>
    );
}

export default TaskItem;