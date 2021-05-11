# CSC 468 Cloud Final Project

## Project Details
Team Members: Mitch Griffith, Klentin Mollai, Noah Demi, Liam Kelleher, Matt Logan

We chose to do installation and deployment for this project.  We chose this to get more hands on experience with Docker and Kubernetes.  These are good tools to have knowledge with moving into the workforce.  

Our three services are:
* php-apache server
* MySQL database
* Adminer administration tool

Link to project resources:
* Action Log: https://docs.google.com/document/d/1ElFoIr5jb2kwBYB_Svwb5WzeizQcR_evMXCaTS6yKJg/edit?usp=sharing
* Presentation Slides: https://docs.google.com/presentation/d/1SLg-gG-4C7VtFkQPTeEyPi8y2jNA4lQ0wlYn-qbhRwY/edit?usp=sharing
* Documentation Paper: https://docs.google.com/document/d/1SRzNWW0U5-iHbAoSpxTkttymckmAJY6rfsAyXgm4zNE/edit?usp=sharing

## Repository Description:

This repository contains everything you need to get a Cloud Lab experiment up and running.  The experiment will have everything needed to get deploy an app in Kubernetes.  Once the experiment is lauched, the shell scripts will run to install Kubernetes and Docker.  You will have to launch the network manually in order to be able to deploy on Kubernetes.  

The profile.py file requests a total of 4 nodes.  One head node and three worker nodes (worker-1, worker-2, worker-3).  
