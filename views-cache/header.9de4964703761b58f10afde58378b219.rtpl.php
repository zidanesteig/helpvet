<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <title>Inicio</title>

    <link rel="shortcut icon" href="/views/login_cliente/favicon.png">

    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.brown-purple.min.css" />

    <link rel="stylesheet" href="https://getmdl.io/assets/main.css">


    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <style>

      ul {



      list-style-type: none;



      }

      .mdc-toolbar--fixed{

         background-color: #795548;

      }

      .star{

        color: #AEEA00;

      }

    </style>

  </head>

  <body class="mdc-typography" data-demo-disable-hash-link-navigation style="background-color:#fff; min-height: 0%;">

    <header class="mdc-toolbar mdc-toolbar--fixed demo-header-toolbar">

      <div class="mdc-toolbar__row">

        <section class="mdc-toolbar__section mdc-toolbar__section--align-start">

          <span class="catalog-logo mdc-toolbar__menu-icon">

            <img src="/views/login_cliente/favicon2.png" width="100%">

          </span>

          <span class="mdc-toolbar__title catalog-title">HelpVet - Inicio</span>

        </section>

        <div>

          <nav class="mdc-tab-bar mdc-tab-bar--icon-tabs">

            <a class="mdc-tab mdc-tab--active" href="/login_cliente">

              <i class="material-icons mdc-tab__icon" aria-label="Recents">home</i>

              <span class="mdc-tab__indicator"></span>

            </a>

            <a class="mdc-tab" href="/login_cliente/profile">

              <i class="material-icons mdc-tab__icon" aria-label="Favorites">person</i>

              <span class="mdc-tab__indicator"></span>

            </a>

            <a class="mdc-tab" href="animal.php">


              <i class="material-icons mdc-tab__icon" aria-label="Favorites">pets</i>

              <span class="mdc-tab__indicator"></span>

            </a>

            <a class="mdc-tab" href="/login_cliente/logout">

              <i class="material-icons mdc-tab__icon" aria-label="nearby">exit_to_app</i>

              <span class="mdc-tab__indicator"></span>

            </a>

          </nav>

        </div>

      </div>

    </header>
