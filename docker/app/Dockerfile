FROM centos:latest

RUN yum -y update && yum -y install httpd

RUN rpm -ivh http://dev.mysql.com/get/mysql57-community-release-el7-8.noarch.rpm
RUN yum -y install mysql-community-client

RUN yum -y install epel-release \
 && rpm -ivh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm \
 && yum -y install --enablerepo=remi,remi-php72 php \
php-opcache php-devel php-mbstring php-mcrypt php-mysqlnd php-phpunit-PHPUnit \
php-pecl-xdebug php-gd php-intl php-symfony php-pdo php-xml php-tokenizer php-pear php-zip

ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]
# CMD ["echo", "ServerName localhost:80", "<<", "/usr/sbin/httpd/httpd.conf"]
# RUN echo "ServerName localhost" | tee /etc/httpd/conf/httpd.conf