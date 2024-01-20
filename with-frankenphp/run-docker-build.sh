docker build -t flightphp-starter-franken .
# docker run -it --rm --name flightphp-starter-instance flightphp-starter-franken
docker run -v $PWD:/app/public -p 80:80 -p 443:443 flightphp-starter-franken