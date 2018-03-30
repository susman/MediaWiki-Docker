FROM docker.elastic.co/elasticsearch/elasticsearch:6.2.3 

COPY docker/elasticsearch/elasticsearch.yml /usr/share/elasticsearch/config/elasticsearch.yml
