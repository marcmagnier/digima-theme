# Thème Digima — instructions pour Claude

Thème WordPress blocs (FSE) sur mesure pour **www.digima.be**, dans le cadre de la refonte du site et de la charte graphique de Digima SNC (Andenne, Belgique). Il remplace Divi. Interlocuteur : Marc-Laurent Magnier.

Langue : **tout en français** (contenus, libellés, commentaires de code, messages de commit, échanges).

## Décisions déjà prises (ne pas les rediscuter sans raison)

- **Plus de Divi ni de page builder.** Thème blocs + éditeur Gutenberg natif uniquement. Raison : le contenu Gutenberg (HTML + commentaires de blocs) s'édite de façon fiable par Claude via le connecteur WordPress ; le JSON de Divi 5 non.
- **Positionnement :** agence web généraliste, quatre activités **à égalité** :
  1. Sites web & webdesign
  2. Cloud souverain (Nextcloud) — offre à part entière, même charte, pas de sous-marque
  3. Conseil et stratégies Open Data
  4. Conseil IA
  Ne plus centrer le discours sur la santé ou le secteur public.
- **Charte :**
  - Bleu nuit `#0D2A3A` (couleur de marque), vert accent `#C4E86B`, vert texte `#4D7A10`, bleu acier `#3F7398` (secondaire), brume `#F3F6F7` (fonds clairs, `surface-alt` du design system). Les autres valeurs (neutres, variantes nuit, échelles) viennent de `tokens.json` du design system et sont reprises dans `theme.json`.
  - **Le vert accent `#C4E86B` n'est jamais utilisé en texte sur fond clair** (contraste insuffisant) : en texte sur fond clair, utiliser `#4D7A10`. Le vert accent sert en fond (boutons, encadrés) ou en texte sur bleu nuit.
  - Typo unique : **DM Sans** (400/500/600), embarquée dans `assets/fonts/`.
  - Logo : minuscules géométriques, points des « i » en vert, + symbole carré « d ».
  - Référence complète : artifact design système « Digima » sur claude.ai (https://claude.ai/artifact/QLWMHN4cJXKENtZTNViZBk). Les décisions de projet sont aussi dans le projet claude.ai « Digima.be ».
- **Brief de rédaction** : fichier local à la racine du clone, **jamais versionné** (dépôt public). Il fait foi pour les textes : écriture au « je » (pas de « nous » d’'agence), hébergement : sites web sur des serveurs en Belgique et en France (« 100 % européen »), cloud Nextcloud exclusivement en Belgique, aucun prix public (seule exception validée par Marc : cloud « Dès 100 € par mois »), témoignages en lorem ipsum en attendant les vrais.
- **Images** : fournies par Marc (photos et illustrations générées par IA). En attendant, blocs image d’'attente de la médiathèque avec une légende qui décrit l’'image voulue.

## Architecture du thème

- WordPress ≥ 6.9 (le site tourne en 7.1), PHP ≥ 8.0.
- **`theme.json` est la source de vérité** pour couleurs, typo, espacements, tailles, styles de blocs. Pas de couleurs ni de tailles codées en dur dans les templates : utiliser les presets (`var:preset|color|nuit`, `has-nuit-background-color`…).
- `templates/` : modèles FSE (`index`, `front-page`, `home`, `single`, `page`, `archive`, `search`, `404`).
- `parts/` : `header`, `footer` (+ éventuelles variantes).
- `patterns/` : **toutes les sections réutilisables sont des patterns PHP** (en-tête de fichier `Title`, `Slug: digima/...`, `Categories: digima`) pour que Marc puisse les insérer lui-même dans Gutenberg. Catégorie de patterns `digima` enregistrée dans `functions.php`.
- `styles/` : variations de style de blocs (Section nuit, Section brume, Carte, bouton Lien).
- Le **design system** (artifact ci-dessus) est la référence des valeurs : le lire (`project/README.md`, `project/tokens.json`, `project/components/bundle.css`) avant de créer un pattern ou un style. Ses logos, icônes et polices y sont disponibles.
- `assets/` : polices, images **du thème** uniquement (logo, pictos, textures). Les illustrations d'articles et de pages n'y vont pas (voir Images).
- CSS supplémentaire minimal dans `style.css` ; pas de framework CSS, pas de build JS sauf nécessité réelle. Pas de jQuery.
- Accessibilité : contrastes AA, focus visibles, ordre des titres respecté, textes alternatifs.
- Performance : pas de dépendance externe chargée depuis un CDN (polices locales).
- Le contenu doit rester éditable par Marc dans Gutenberg : privilégier les blocs core ; un bloc custom seulement s'il n'y a pas d'alternative propre.

## Structure du site prévue

Pages (à reconstruire en Gutenberg, les contenus Divi actuels sont obsolètes) :

| Page | Contenu attendu |
|---|---|
| Accueil | Hero (promesse + CTA), les 4 activités à égalité, réalisations récentes, approche/valeurs, derniers articles, CTA contact |
| Sites web & webdesign | Offre, méthode, formules, réalisations liées, CTA |
| Cloud souverain | Offre Nextcloud, hébergement, sécurité/souveraineté, formules, CTA |
| Open Data | Conseil et stratégies, cas d'usage, CTA |
| Conseil IA | Accompagnement IA (dont WordPress + Claude via MCP), CTA |
| Réalisations | Grille de projets : **articles de la catégorie « Réalisations » (slug `realisations`)** — décidé avec Marc le 2026-11-21 ; page `/nos-realisations/` avec le pattern `digima/realisations-grille` |
| Blog | Liste d'articles |
| À propos / Notre société | Équipe, histoire, valeurs |
| Contact | Coordonnées (email, mobile 0487/16.71.32, adresse Chaussée de Ciney 174A1, 5300 Andenne), formulaire, TVA BE 0849.467.305 |
| Mentions légales, Vie privée | Pages légales |

Patterns à prévoir en priorité : hero, grille des 4 activités, bloc chiffres/arguments, réalisations, témoignage, CTA bandeau bleu nuit, FAQ, contact.

## Workflow Git et déploiement — IMPORTANT

- Dépôt : `marcmagnier/digima-theme`. **La branche `main` est la production** : le plugin *Deployer for Git* sur le site reçoit un webhook GitHub à chaque push sur `main` et met à jour le thème **immédiatement** sur www.digima.be.
- Donc : **ne jamais pousser sur `main` sans l'accord explicite de Marc.** Travailler sur des branches (`feature/...`) et ouvrir une pull request ; Marc valide puis fusionne (ou demande la fusion).
- À chaque version déployée, incrémenter `Version` dans `style.css` (et la mentionner dans le message de commit).
- **Le thème n'est pas encore activé en production** (Divi l'est). Tant que toutes les pages ne sont pas reconstruites en Gutenberg, ne pas activer le thème sur le site public ; tester via l'environnement local, l'aperçu du personnaliseur, ou un staging.
- Environnement local : `.wp-env.json` est fourni. `npx @wordpress/env start` (Docker requis) lance WordPress en français sur http://localhost:8888 avec le thème monté et activé (identifiants par défaut de wp-env : admin / password, local uniquement). Le script d'activation suppose que le dépôt est cloné dans un dossier nommé `digima-theme`. Toujours vérifier le rendu en local avant de proposer une PR.
- Sans Docker (cas du poste de Marc) : WordPress Playground, lancé **depuis PowerShell** à la racine du dépôt (Git Bash déforme le chemin du `--mount`) : `npx -y @wp-playground/cli@latest server --port=8888 "--mount=.:/wordpress/wp-content/themes/digima-theme" --login`, puis activer le thème et passer le site en français (ou via un blueprint). Le contenu de test n'est pas conservé d'un lancement à l'autre.

## Adresses des pages

`/sites-web/`, `/cloud-souverain/`, `/open-data/`, `/intelligence-artificielle/`, `/realisations/`, `/a-propos/`, `/blog/`, `/contact/`, `/mentions-legales/`, `/confidentialite/`. Pages intérieures : modèle « Page pleine largeur (sans titre) » + pattern `digima/en-tete-page` (qui porte le H1).

## État actuel (v0.5.0 — déployée sur le serveur le 2026-11-21, thème NON activé)

- `theme.json`, aligné sur les tokens du design system :
  - palette : `nuit`, `nuit-700`, `vert`, `vert-texte`, `vert-doux`, `acier`, `acier-doux`, `brume`, `blanc`, `texte-secondaire`, `filet` (sélecteur de couleur libre désactivé) ; `filet-fort`, `danger` et les valeurs du thème « Nuit » sont dans `custom.couleur` ;
  - DM Sans 400/500/600 ; tailles `x-small` (13 px) → `display` (56 px) ; h1 44, h2 34, h3 24, h4 19 ; texte 16/26 ;
  - espacements `10` → `80` = `space-1` → `space-8` du design system (4 → 64 px), `90` = espacement de section (64 → 96 px) ;
  - rayons `custom.radius` (sm 6, md 12, lg 20, pill), ombre `carte`, `custom.measure` (68ch).
- `styles/` : Section nuit, Section brume, Carte (groupe ou colonne), bouton Lien ; le bouton « contour » sert de bouton secondaire.
- `style.css` : couleurs sémantiques `--dg-*` qui basculent en thème Nuit dans `.is-style-section-nuit` et `.has-nuit-background-color`, soulignement vert des liens, survols, focus 2 px, pied de page collé en bas.
- `functions.php` : catégorie de patterns `digima`, style de liste « Sans puces », `style.css` chargé aussi dans l'éditeur, favicon de repli (symbole) tant qu'aucune icône de site n'est définie.
- `assets/images/logo/` : les 4 logos du design system (principal, blanc, nuit mono, symbole), copiés tels quels.
- En-tête (`patterns/en-tete.php`, appelé par `parts/header.html`) : logo blanc, bloc Navigation sans menu imposé (à l'activation, WordPress reprend le menu classique « Main » du site), bouton compact « Prendre rendez-vous » vers `/contactez-nous/`. Menu replié sous 1100 px (6 entrées) ; bouton masqué sous 480 px.
- Pied de page (`patterns/pied-de-page.php`) : présentation, activités (sans liens tant que les pages n'existent pas), coordonnées, TVA, liens `/mentions-legales/` et `/vie-privee/` (pages à créer).
- Les patterns du thème sont mis en cache par WordPress selon la `Version` de `style.css` : après avoir ajouté ou modifié un pattern, changer la version (ou vider le cache) pour le voir en local.
- Accueil : `templates/front-page.html` = en-tête + **contenu de la page d'accueil WordPress** + pied. Le contenu de l'accueil vit dans la page (éditable par Marc et par le connecteur), pas dans le thème.
- Patterns de contenu (textes = brouillons à remplacer une fois insérés) : `digima/hero` (couverture « Verre »), `digima/activites` (4 cartes, ancre `#activites`), `digima/realisations` (3 dernières réalisations, section brume), `digima/approche` (4 arguments sous filet vert), `digima/derniers-articles` (boucle des 3 derniers articles, section brume), `digima/cta-contact` (aplat nuit arrondi avec motif cercle), `digima/realisations-grille` (toutes les réalisations, 12 par page, paginé). `digima/page-accueil` assemble hero → activités → réalisations → approche → articles → contact ; il est proposé à la création d'une page.
- Réalisations (`inc/realisations.php`) : les patterns cherchent la catégorie par son slug `realisations` au moment de l'insertion (consigne affichée si elle n'existe pas). Les réalisations sont **exclues des listes d'actus** : page Blog (requête principale) et boucles d'articles sans filtre de catégorie, comme « Derniers articles ».
- Couverture « Verre » : CSS seul (formes floues animées, cannelures, grain, voile côté texte) + `assets/js/verre.js` (lueur qui suit la souris, JS natif, chargé seulement si une couverture « Verre » est affichée ; inactif sur tactile et si « réduire les animations »).
- Bouton principal : pastille flèche bleu nuit (pivote au survol). Styles de bloc ajoutés : paragraphe « Étiquette », image « Pastille », groupe « Filet à trait vert ».
- `assets/images/icones/` : les 11 icônes du design system (tracés de `components/bundle.js`), trait bleu nuit.
- Manque : témoignage, FAQ, contact, pages d'activités, pages légales. Sur le site, la catégorie « Réalisations » n'existe pas encore (à créer via le connecteur, avec l'accord de Marc).

## Contenu et outils côté site

- Le contenu (articles, pages, menus, SEO, médias) est géré via le connecteur MCP **« Wordpress Digima »** (Abilities API + MCP Adapter), disponible dans Claude sur claude.ai et dans Claude Desktop. Le thème ne doit pas embarquer de contenu en dur hormis les patterns et les templates.
- Limites connues du connecteur :
  - `ewpa/upload-image` n'importe que depuis une URL publique se terminant par une extension d'image.
  - `ewpa/search-replace` échoue si le texte cherché contient un antislash ; pour un remplacement complet, préférer `ewpa/update-post` avec tout le contenu.
- **Images :** les images du thème vont dans ce dépôt ; les illustrations d'articles et de pages vont dans la **médiathèque WordPress**. Boîte de dépôt : un partage Nextcloud public de Marc (cloud.hdrive.net, envoi autorisé). Son lien est un secret : il n'est **jamais** écrit dans ce dépôt public (il est dans la mémoire locale de Claude ou à demander à Marc). Méthode : déposer le fichier avec `curl -T fichier.png -H "X-Requested-With: XMLHttpRequest" https://cloud.hdrive.net/public.php/dav/files/<jeton>/fichier.png`, puis l'importer avec `ewpa/upload-image` depuis cette même adresse WebDAV (elle renvoie l'image ; le lien `/s/<jeton>/download/...` renvoie un zip). Captures d'écran de sites : Edge headless (`--window-size=1440,900 --virtual-time-budget=15000` et un user-agent de navigateur), car les services de capture en ligne sont souvent bloqués par les protections anti-robots.
- Style des illustrations : vectoriel plat aux couleurs de la charte (fond bleu nuit, accents vert et bleu acier), personnages simples.

## Règles générales

- Ne jamais committer de secret (mots de passe, jetons, clés d'application).
- Commits petits et explicites, en français.
- En cas de doute sur un contenu (prix, chiffres, promesses commerciales, noms de clients), demander à Marc plutôt que d'inventer.
