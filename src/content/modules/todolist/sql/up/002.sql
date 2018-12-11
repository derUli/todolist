ALTER TABLE `{prefix}todolist_items`
  ADD CONSTRAINT fk_todolist_user_id 
  FOREIGN KEY (user_id) 
  REFERENCES `{prefix}users`(id) 
  ON DELETE CASCADE;
