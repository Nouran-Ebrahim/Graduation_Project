# Automated Network Configuration Project

## ***Introduction***
---
Having a Network with many Routers and Switches and a lot of devices connected to this network will add difficulty to configurate this devices by just command lines (CMD or the Console of the Device)



## ***Objective***
---
Providing a Website with friendly User Interface to facilitate Configurating the devices of a virtual network builded using GNS3.



## ***The Contents of the Project***
---
1. ***Web_Part***
   1. ***Full Website***:
      * ***Front-End Side*** : *The User Interface* That The **user** will deal with.
      * ***Back-End Side*** : Any Processes happen under the hood **like:** *storing the data on a database - configurating the device using scripts*

   1. ***XAMPP*** : used to provide servers for both the **Website & DataBase**.

1. ***Network Part:***
   1. ***GNS3*** : *Simulation* program used to build a virtual network.
 
   1. ***Python Scripts***: Scripts used to configure settings of selected device all at once.

## ***Steps to run the Project***
---
 1. Clone the Project or download it.
 1. Download & Install ***XAMPP & GNS3***.
 1. Move **"Web_Part"** Folder to **"htdocs"** folder which inside **"xampp"** folder.
 1. Go to **"Full_Project\Network_Part\new_grad\neww"** Folder
    and open the GNS file.
 1. Start the all Devices of the Network.
 1. Open **XAMPP** and start **Apache** and **SQL** servers.
 1. Open **myphpadmin** page by clicking on **Admin** after starting the **SQL** Server
 1. Create a database called ***"autonet"***.
 1. Import the **"autonet.sql"** file contains default data of the network devices on the **"autonet"** Database from **"Web_Part/sql"** folder.
 1. Go to ***http://localhost/Web_Part/Pages***
---
### Note : The Default to Login.
- Admin Name: admin
- Password: autonet

