CREATE TABLE Department (department_id BIGINT AUTO_INCREMENT, name text, PRIMARY KEY(department_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE LinkingRoleMenu (id BIGINT AUTO_INCREMENT, role_id BIGINT UNSIGNED, menu_id BIGINT UNSIGNED, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE Menu (menu_id BIGINT AUTO_INCREMENT, menu_name text, menu_eng text, menu_parent BIGINT, menu_ord BIGINT, menu_desc text, menu_state text, INDEX menu_parent_idx (menu_parent), PRIMARY KEY(menu_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE Roles (role_id BIGINT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(role_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
CREATE TABLE SystemUser (system_user_id BIGINT AUTO_INCREMENT, login_name VARCHAR(40), login_password VARCHAR(32), display_name VARCHAR(50), status TINYINT(1) DEFAULT '1' NOT NULL, department_id BIGINT NOT NULL, role_id BIGINT NOT NULL, INDEX department_id_idx (department_id), INDEX role_id_idx (role_id), PRIMARY KEY(system_user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE = INNODB;
ALTER TABLE Menu ADD CONSTRAINT Menu_menu_parent_Menu_menu_id FOREIGN KEY (menu_parent) REFERENCES Menu(menu_id);
ALTER TABLE SystemUser ADD CONSTRAINT SystemUser_role_id_Roles_role_id FOREIGN KEY (role_id) REFERENCES Roles(role_id);
ALTER TABLE SystemUser ADD CONSTRAINT SystemUser_department_id_Department_department_id FOREIGN KEY (department_id) REFERENCES Department(department_id);
