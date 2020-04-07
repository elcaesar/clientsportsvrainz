<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Client Sports Vrainz

El presente es un cliente web que consume servicios de la API cuyo endpoint es:

 https://sports.vrainz.com/v1/
 
Se agregan parámetros siguientes:

/info/{0}
Donde {0} es el ani del usuario (celular)

Por ejemplo se hace la consulta a la API (verbo GET) acerca de un usuario con nro de ani 116543264 se estructura como sigue:

https://sports.vrainz.com/v1/info/116543264

Se utiliza la versión 7.* de Laravel que ya incorpora <a href="https://laravel.com/docs/7.x/http-client"> Guzzle <a/> que es un Cliente Http que permite realizar peticiones a API de forma más fácil.



