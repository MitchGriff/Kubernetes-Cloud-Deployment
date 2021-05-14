# CSC 468 Cloud Final Project

## Project Details:
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

## Launching the Project

CloudLab Only: Launch the experiment.  We launched our experiemnt on the Emulab network and had no problems with it.  

Once yhou log into the head node you will need to run the following commands to launch the network:

```
cd
bash /local/repository/launch_network.sh
kubectl get nodes
```
Next we will get create a Kubernetes namespace to add the .yaml files to.  We called our namespace blueteam:
```
bash
kubectl create namespace blueteam
```
Now we need to add the deployment .yaml file to the namespace:
```
kubectl create -f /local/repository/blueteam.yaml --namespace blueteam
```
Now we can run this command to verify that the containers are running containers pods:
```
kubectl get pods -n blueteam
```
The pods may take a few minutes to get ready but they will get theselves up and running.  Now that we have the images deployed on the network, we need to add the services to the network.  

We can add the services to the network by: 
```
kubectl create -f /local/repository/blueteam-service.yaml --namespace blueteam
```
Once this is done, we can run:
```
kubectl get services --namespace blueteam
```
in order to confirm that the services have been added and they are added to the network and they have been mapped to their ports.  

This gets the project up and running in its current state.  There is currently a problem with the port mapping where the 
