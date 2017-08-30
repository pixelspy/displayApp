# masterpiece_displayApp


# Contexte

displayApp.com is an application that allows artists to upload images and arrange them in different templates.


# Storytelling

Linus is a concept artist and graphic designer. A big part of his work consists of researching images and creating moodboards.
Linus needs an application that allows him to have his images displayed on one of his screens while he draws on the other screen. This tool will allow him to have an overview of his research while he creates.

-----------------------------------------------------

# User Stories

## User Story 1: 
As a user
I want to upload my images 
In order to have them available and arranged.

## User Story 2:
As an admin
I want to add new templates
in order to make the app grow.

## User Story 3:
As a visitor
I want to browse through the different templates
in order to understand the use of the app

## User Story 4:
As a visitor
I want to create an account
in order to enjoy the app fully.

## User Story 5:
As a user
I want to convert my template into a pdf or jpg file
in order to print it out or send it.

## User Story 6:
As a user 
I want to have access to all the other users using the app
in order to enlarge my network

## User Story 7:
As an admin
I want to have access to templates statistiques
in order to rank the templates.

## User Story 8:
As an admin
I want to have access to users statistique data
in order to manage usability.

## User Story 9:
As a user
I want to report an image
in order to let the admin know about unethical messages.

## User Story 10:
As an admin
I want to accept or refuse the reported image
in order to manage unethical messages.

## User Story 11:
As a user
I want to browse through the library of images
in order to get inspirations and good quality images.

## User Story 12:
As a user
I can invite another user to work on one of my templates
in order to have a collaborative project.

## User Story 13:
As an admin
I want to accept or refuse new users
in order to manage the order of the site.

-----------------------------------------------------

# Fonctionnalities

## F1
Upload images with a drag and drop system or option

## F2
Layouts availble to the user, made in JSON and stored in the db.

## F3
User Authentification (register, login, logout), with a dashboard (user sessions: created projects)

## F4
Admin Authentification (private url), with a dashboard (update templates, update users)

## F5
Easy interface
Inspiration @ [Brutalism](https://www.uxbrutalism.com/)

-----------------------------------------------------

# Sprints ( Monday 7 August - Thursday 31 Agust)
1 sprint = 1 week (6 days)

## Sprint 1
F3, F5

## Sprint 2
F1, F2

## Sprint 3
F1, F2, F4

## Sprint 4 (= 4 days) 
F5

-----------------------------------------------------

# Defining Controllers + views

7 actions:

- index (list of all)
- show (by id)
- create / view: form
- store (sending form)
- edit (editing form)
- update (execution of editing form)
- delete

## Users 

- index *users/*
- show *users/[ID]*
- create / store : profile form *users/registration_form*
- edit / update : profile information form *users/[ID]/profile_form*
- delete *users/[ID]/unregister*

## Layouts

- index *layouts/*
- show *layouts/[ID]*
- edit /update : layout form updates as project *layouts/[ID]/projects/[ID]*

## Projects

- index *projects/*
- show *projects/[ID]*
- create / store : layout form *projects/[ID]/layout/[ID]*
- edit / update : layout form *projects/[ID]/layout/[ID]*
- delete

## Images

- index *images/*
- show *images/[ID]*
- create / store : upload (by drag'n'drop) *?*
- delete *images/[ID]/?*






