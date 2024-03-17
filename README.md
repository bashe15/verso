# Verso PHP Test

## Overview
Verso PHP app is a simple app which is printing values based on some criteria: 
- if the number is divisible by 3 print Fizz
- if the number is divisible by 5 print Buzz
- if the number is divisible by 3 and 5 print FizzBuzz
- else print the number

## Getting Started

To use the Verso PHP App, follow these setup instructions:

### Prerequisites

Ensure you have [Docker](https://www.docker.com/) installed on your system to facilitate an easy setup and execution environment for the service

### Installation Steps

1. Clone or Unzip the Project: Start by cloning the project repository or unzipping the downloaded project archive to your local machine.
2. Build and Run the Docker Containers: Navigate to the project root directory and execute the following commands to build and run the necessary Docker containers:
```bash
cd verso/
make build
make up
```
3. **Access the PHP and Composer Environment:** Enter the interactive shell environment configured for PHP and Composer operations:

```bash
make shell
```
4. **Install Dependencies:** Within the shell environment, install the project dependencies using Composer:
```bash
composer install
composer dumpautoload -o
```

## Accessing the Service
Once the installation is complete and the services are running, you can access the weather service web interface by navigating to:

```bash
http://localhost:8080/index.php
```
Enter your geographical coordinates (longitude and latitude) in the provided form fields and submit the information to view the weather details table as depicted in the example image above.

## Dependencies
This project relies on Composer for managing PHP dependencies. Ensure you have Composer installed on your system or within the Docker environment to manage project dependencies.
