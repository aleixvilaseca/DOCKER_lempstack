-----------------------------------------
#you can use phpmyadmin to port 8080 or workbench to port 3306
-----------------------------------------
#Up the service
-----------------------------------------
docker-compose up -d
-----------------------------------------
#stop the containers
-----------------------------------------
docker-compose stop
-----------------------------------------
#inspect a container
-----------------------------------------
docker-compose exec [service] bash
-----------------------------------------
#inspect logs for more information
-----------------------------------------
docker-compose logs -f
-----------------------------------------
#inspect logs for service
-----------------------------------------
docker-compose logs -f [service]
-----------------------------------------
#restart containers for new configurations is taken into account
-----------------------------------------
docker-compose restart
-----------------------------------------
#destroy our containers and volumes so we can start afresh
-----------------------------------------
docker-compose down -v
-----------------------------------------
#delete everything, including images and orphan containers
-----------------------------------------
docker-compose down -v --rmi all --remove-orphans
-----------------------------------------
-----------------------------------------
