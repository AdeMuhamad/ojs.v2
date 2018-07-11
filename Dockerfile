FROM centos:7

RUN yum update -y
RUN yum upgrade -y 
RUN yum install vim net-tools telnet -y

RUN mkdir -p /code
ADD ojs-2.4.8-2 /code
RUN mkdir /files
 

#NGINX
ADD nginx-stable.repo /etc/yum.repos.d/
RUN yum install -y nginx
ADD nginx.conf /etc/nginx/
ADD nginx.service /usr/lib/systemd/system/
ADD ojs.conf /etc/nginx/conf.d/default.conf 

#PHP
RUN yum install epel-release -y
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum install yum-utils -y
RUN yum install -y php56 php56-php-fpm php56-php-gd php56-php-json php56-php-mbstring php56-php-mysqlnd php56-php-xml php56-php-xmlrpc php56-php-opcache 
ADD www.conf /etc/opt/remi/php56/php-fpm.d/

RUN chown -R apache:apache /files
RUN chown -R apache:apache /code

EXPOSE 80
