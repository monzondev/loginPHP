DROP DATABASE IF EXISTS administracion;

CREATE DATABASE administracion CHARACTER SET utf8;

USE administracion;

GRANT ALL ON administracion.* TO 'admin-user' @'localhost' ;
CREATE TABLE tipo_usuario (
    id_tipo_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    descripcion VARCHAR(200)
);

CREATE TABLE usuario (
    id_usuario INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_tipo_usuario INT UNSIGNED NOT NULL,
    nombre VARCHAR(25) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    user VARCHAR(25) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    pass VARCHAR(25),
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id_tipo_usuario)
);

/* Tipo Usuario */
INSERT INTO
    tipo_usuario(id_tipo_usuario, nombre, descripcion)
VALUES
    (
        1,
        'Administrador',
        'Usuario con permisos de gestion de usuarios'
    );

INSERT INTO
    tipo_usuario(id_tipo_usuario, nombre, descripcion)
VALUES
    (
        2,
        'Comun',
        'Usuario con permisos generales de uso de la aplicacion'
    );

/* Usuaio*/
INSERT INTO
    usuario(
        id_usuario,
        id_tipo_usuario,
        nombre,
        apellido,
        user,
        correo,
        pass
    )
VALUES
    (
        1,
        1,
        'Salvador',
        'Perez',
        'SPerez',
        'perez23@ticucos.com',
        '12345'
    );

INSERT INTO
    usuario(
        id_usuario,
        id_tipo_usuario,
        nombre,
        apellido,
        user,
        correo,
        pass
    )
VALUES
    (
        2,
        2,
        'Alexander',
        'Lopez',
        'ALopez',
        'lopez23@ticucos.com',
        '12345'
    );