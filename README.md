# Laravel - use local fonts with Tailwind CSS and Vite

Ce projet est né d'un constat: vous êtes souvent nombreuses et nombreux à galérer pour utiliser des polices stockée en local dans vos projets Laravel avec Tailwind CSS et Vite. 

Parmis vous, il y en a qui abandonnent et qui cèdent aux sirènes du CDN de Google Fonts quand d'autres usent de pratiques obscures pour arriver à leurs fins (les paths qui pointent vers le rep ./public, on vous a vu le faire, c'est pas bien!)

## Introduction

Nous allons partir du principe que vous avez déjà un projet Laravel auquel vous voulez ajouter votre propre sélection de polices que vous voudriez stocker en local. Ou bien vous pouvez tout simplement cloner ce projet, auquel cas il faudra au préalable lancer les commandes suivantes pour installer les dépendances nécessaires :

````
composer install
npm install
npm run dev
````

### Sélectionner, télécharger et stocker des polices

Pour un souci de simplicité, nous allons utiliser une police issue de [Google Fonts](https://fonts.google.com/). Prenons par exemple la police [DM Serif Display](https://fonts.google.com/specimen/DM+Serif+Display?query=dm), non seulement parce qu'elle est jolie mais aussi parce qu'elle ne contient qu'une seule graisse (400, afin de ne pas alourdir notre exemple).

Comment la télécharger? Bon, Google Font propose un magnifique lien "Download Family", mais nous allons plutôt nous "simplifier" la vie et passer par un service tiers nommé [Google Webfonts Helper](https://google-webfonts-helper.herokuapp.com/fonts) afin de non seulement récupérer un zip avec les fichiers de la police désirée mais aussi le CSS qui va bien avec. 

Utilisons [ce lien](https://google-webfonts-helper.herokuapp.com/fonts/dm-serif-display?subsets=latin) pour reprendre notre police DM Serif Display. Vous verrez qu'il y a 4 étapes successives, que vous adapterez en fonction de vos envies :

1. **Select charsets**
Nous utiliserons le charset par défaut `Latin`

2. **Select styles**
Nous utiserons le style par défaut `regular`

3. **Copy CSS**
L'idéal serait que vous gardiez le paramètre par défaut `Best Support`. Dans notre exemple, nous allons nous contenter d'utiliser `Modern Browser` afin de nous alléger cette documentation. Le plus important ici est de bien paramétrer l'option `Customize folder prefix (optional)` qui est bien souvent votre plus grande source de problème. Initialement configurée sur `../fonts/`, nous allons remplacer cela par `./`, ni plus, ni moins. Ne copiez pas le CSS tout de suite, nous allons le faire après.

4. **Download files**
Rien de compliqué, il faut cliquer sur le gros bouton bleu pour récupérer une archive Zip de la police sélectionnée, décompresser l'archive, la renommer pour obtenir un nom plus "propre", comme par exemple `dm-serif-display` et d'aller le placer dans le dossier `./resources/fonts` de votre app Laravel, que vous aurez préalablement créé si il n'existe pas encore.

Malheureusement, le service Google Webfonts Helper n'inclut pas dans l'archive Zip le fichier CSS contenant le `@font-face`, nous allons devoir le créer nous même. Pour cela, créer un fichier nommé `dm-serif-display.css` dans le répertoire `./resources/fonts/dm-serif-display` et collez-y le code CSS fourni à l'étape 3. Enregistrer votre fichier. Nous n'en avons pas terminé pour autant...

### Paramétrer Tailwind CSS

A ce niveau, nous allons estimer que vous avez déjà installé Tailwind CSS, et si malgré tout ce n'était pas encore le cas, je ne vais rien vous apprendre de plus que ce qu'il est écrit dans [la documentation officielle](https://tailwindcss.com/docs/guides/laravel) pour l'installer correctement dans votre projet Laravel.  

Techniquement, vous devriez avoir un fichier `app.css` dans votre répertoire `./resources` et qui doit contenir les lignes suivantes : 

````
@tailwind base;
@tailwind components;
@tailwind utilities;
````

Nous allons ajouter en haut de ce fichier la ligne suivante : 

````
@import '../fonts/dm-serif-display/dm-serif-display.css';
````

Vu que le path est un problème récurrent, je vous explique ce que l'on fait ici. L'arborescence de notre dossier `./resources` est, grosso modo, la suivante :

````
resources
|- css
|    |- app.css
|- fonts
|    |- dm-serif-display
|          |- dm-serif-display-v10-latin-regular.woff
|          |- dm-serif-display-v10-latin-regular.woff2
|          |- dm-serif-display.css
|- js
|- views
````

Donc pour importer dans le fichier `app.css` le contenu de notre fichier `dm-serif-display.css`, nous devons remonter d'un dossier `..` (puisque nous sommes dans le dossier `css`), aller dans le dossier `/fonts` puis dans le sous-dossier `/dm-serif-display`, ce qui nous donne bien le path `../fonts/dm-serif-display/dm-serif-display.css` utilisé dans l'import.

Mais tout ceci ne suffit pas pour exploiter notre nouvelle police avec Tailwind CSS. Nous allons devoir éditer le fichier `tailwind.config.js` qui est à la racine de votre projet Laravel et y ajouter une nouvelle `FontFamily` en étendant le thème : 

````
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      fontFamily: {
        "dm-serif": ["DM Serif Display", "serif"],
      },
    },
  },

  plugins: [],
};
````

De la sorte, vous aurez désormais une nouvelle classe nommée `font-dm-serif` (Tailwind génère automatiquement la classe en concaténant font-[nom de la clé de la font family que vous venez de créer])

## Et maintenant? 

Il ne vous reste plus qu'à lancer dans votre terminal favori la commande `npm run dev` ou `npm run build` et d'utiliser dans vos vues Blade la classe `font-dm-serif`. 

## Bonus

Il semblerait que le SSR (server-side rendering) ne soit plus trop à la monde, le CSR (Client-side rendering) devenant de plus en plus populaire grâce à Vue.js, React ou Angular (ou la techno du moment qui a la plus forte hype). Pour autant, il n'est pas mort. -bottom-3

Laravel a introduit avec la branche 7.x les Anonymous Components dans Blade et c'est, à mon sens, le meilleur moyen de créer du code plus lisible et facilement réutilisable. Dans ce projet, j'ai créé quelques composants Blade qui, je l'espère, vous inspireront pour vos prochains projets et que vous laisserez de côté la "vieille mais honorable" syntaxe Blade pour générer vos layouts et composants :)
