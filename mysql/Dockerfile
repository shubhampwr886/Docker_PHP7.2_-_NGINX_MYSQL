FROM mariadb:latest
RUN apt update -y 

RUN mkdir /workspace
WORKDIR /workspace

ADD db.sh /workspace
RUN chmod +x db.sh

RUN bash -x db.sh
#RUN bash -x db.sh

CMD ["tail","-f","/dev/null"]

