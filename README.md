# Docker: MODx web-development environment

To use:
 - apt install docker docker-compose
 - cd <proj-dir>
 - docker-compose up -d
 - sudo echo '127.0.0.1 example.dev' >> /etc/hosts
 - docker ps (ищем название образа контейнера с php)
 - docker exec -ti <образ php> bash
 - cd /var/www/example.dev
 - Gitify modx:install
 - Gitify package:install --all
