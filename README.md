# Exercise 5: Readme.md

***Welcome to the task README!***

- You are required to create ´Readme.md´ in your project directory to document your activities throughout the project's lifecycle. 
- You will regularly update it to monitor the ongoing development of the project. 

- You will start by outlining the planned features, task assignments to team members and document the evolving progress of your work. 

- Below, you will find an example to help you get started. Feel free to customize it to match your specific requirements and needs.

# Travel Sri Lanka - Team 12

-Travel SriLanka "Travel Sri Lanka" project! This project aims to provide information about Srilankan nature ,diverse culture,stunning,landscapes and warm hospitality with national events .

## Table of Contents
- [Features](#features)
- [Database Tables](#database-tables)
- [Created Forms](#created-forms)
- [Created Tables](#created-tables)

---

## Features

In this section, list and describe the features or functionality that you are working on. You can use checkboxes to track the progress of each feature.

- [ ] Create staff login to create and update current tour packages.(Kaluarachchige Kaluarachchi)-Customize tour packages.
- [ ] Create traveler login -Travelers plan schedule  (Nuwani Fernando)- Travellers plan
- [ ] create to find accomadation details(Supun Weerasinghe)-Hotels and Resorts 
- [ ] create to find events details align to travelers visit.(Kulakshi Herath)-Upcoming Events
- [ ] create Traveler inquery form that can read and reply staff.(Kaluarachchige Kaluarachchi)-Traveler inquery



> Add features as required. 

### Feature 1

Include more detailed information about Feature 1 here. Provide links to related code files (github) & link to the feature (shell.hamk.fi) .

### Feature 2
Include more detailed information about Feature 2 here. Provide links to related code files (github) & link to the feature (shell.hamk.fi) .

### Feature 3

Include more detailed information about Feature 3 here. Provide links to related code files (github) & link to the feature (shell.hamk.fi) .

---

## Database Tables

List the database tables that are part of your project. 

- Table 1 (Created By): Table Name 
- Table 2 (Created By): Table Name 
- Table 3 (Created By): Table Name 

# Traveller,staff : Nuwani Fernando
```
CREATE TABLE staff (
  staff_id int NOT NULL,
  user_id int NOT NULL,
  staff_full_name varchar(100) NOT NULL,
  email varchar(50) NOT NULL,
  phone varchar(15) NOT NULL
) ;

CREATE TABLE Traveller ( 
traveller_id int NOT NULL, 
user_id int NOT NULL, 
full_name varchar(100) NOT NULL, 
email varchar(50) NOT NULL,
number_of_heads int NOT NULL,
check_in date NOT NULL, 
country varchar(50) NOT NULL,
phone varchar(15) NOT NULL, 
gender varchar(15) NOT NULL 
) ;

```

> Include the ER Diagram of the database. 

---

## Created Forms

List and describe any forms that have been created as part of your project. Include details about the purpose of each form and any validation logic.

- Form 1 (Created By): Form Name: Link to the related code file (github) | Link to the form (shell.hamk.fi). | Validations Applied
- Form 2: (Created By): Form Name: Link to the related code file (github) | Link to the form (shell.hamk.fi).  | Validations Applied
- Form 3: (Created By): Form Name: Link to the related code file (github) | Link to the form (shell.hamk.fi).  | Validations Applied


---

## Created Tables

List any tables that you have created in the project work

- Table 1 (Created By): Table Name | Link to the related code file (github) | Link to the table (shell.hamk.fi).
- Table 2 (Created By): Table Name | Link to the related code file (github) | Link to the table (shell.hamk.fi).
- Table 3 (Created By): Table Name | Link to the related code file (github) | Link to the table (shell.hamk.fi).

---



> Feel free to customize this README template to suit your project's specific needs. Providing clear and organized documentation will help your team members understand the project's progress and tasks effectively. This document will have a significant impact on the grading. 
