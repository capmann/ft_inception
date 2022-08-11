NAME = inception

all: prune reload

linux:
	@ sudo echo "127.0.0.1 cmarteau.42.fr" >> /etc/hosts

stop:
	@ docker-compose -f srcs/docker-compose.yml down --volumes
	
clean: stop

prune: clean
	@ docker system prune -f

reload:
	@ docker-compose -f srcs/docker-compose.yml up --build

.PHONY: linux stop clean prune reload all
