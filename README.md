# Earthwise Website
Earthwise is a website about environmental preservation aimed at raising public awareness on this topic. The project was created as a final project for the ADS course and presented at the end of 2022.

# Pre-requisites
Docker installed and runing.\
See the [Docker website](https://www.docker.com/get-started/) for installation instructions.

# Build
Steps to run the project:
1. Clone this repo
```bash
git clone https://github.com/LucasKazuhiro/EarthWise-website.git
cd EarthWise-website
````

2. Build the image
```bash
docker-compose up --build
```

3. In the browser open:
```bash
http://localhost/
```

4. To stop docker, type:
```bash
taskkill
docker-compose down
````
