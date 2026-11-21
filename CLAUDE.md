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
  - Bleu nuit `#0D2A3A` (couleur de marque), vert accent `#C4E86B`, vert texte `#4D7A10`, bleu acier `#3F7398` (secondaire), brume `#EEF3F6` (fonds clairs).
  - **Le vert accent `#C4E86B` n'est jamais utilisé en texte sur fond clair** (contraste insuffisant) : en texte sur fond clair, utiliser `#4D7A10`. Le vert accent sert en fond (boutons, encadrés) ou en texte sur bleu nuit.
  - Typo unique : **DM Sans** (400/500/600), embarquée dans `assets/fonts/`.
  - Logo : minuscules géométriques, points des « i » en vert, + symbole carré « d ».
  - Référence complète : artifact design système « Digima » sur claude.ai (https://claude.ai/artifact/QLWMHN4cJXKENtZTNViZBk). Les décisions de projet sont aussi dans le projet claude.ai « Digima.be ».
- **À confirmer avec Marc** (ne pas inventer) : hébergement « Belgique » ou « Belgique et France », prix publics des formules, photos.

## Architecture du thème

- WordPress ≥ 6.9 (le site tourne en 7.1), PHP ≥ 8.0.
- **`theme.json` est la source de vérité** pour couleurs, typo, espacements, tailles, styles de blocs. Pas de couleurs ni de tailles codées en dur dans les templates : utiliser les presets (`var:preset|color|nuit`, `has-nuit-background-color`…).
- `templates/` : modèles FSE (`index`, `front-page`, `home`, `single`, `page`, `archive`, `search`, `404`).
- `parts/` : `header`, `footer` (+ éventuelles variantes).
- `patterns/` : **toutes les sections réutilisables sont des patterns PHP** (en-tête de fichier `Title`, `Slug: digima/...`, `Categories: digima`) pour que Marc puisse les insérer lui-même dans Gutenberg. Catégorie de patterns `digima` à enregistrer dans `functions.php` (pas encore fait).
- `styles/` : variations de style de blocs si besoin (ex. section sombre).
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
| Réalisations | Grille de projets (type de contenu ou catégorie à décider) |
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

## État actuel (v0.1.0)

Thème minimal de test : `theme.json` (palette, DM Sans), `parts/header.html`, `parts/footer.html`, `templates/index.html`, `single.html`, `page.html`. Il a servi à valider la synchro GitHub → WordPress. Tout le reste (front-page, patterns, logo, navigation, responsive soigné) est à construire.

## Contenu et outils côté site

- Le contenu (articles, pages, menus, SEO, médias) est géré via le connecteur MCP **« Wordpress Digima »** (Abilities API + MCP Adapter), disponible dans Claude sur claude.ai et dans Claude Desktop. Le thème ne doit pas embarquer de contenu en dur hormis les patterns et les templates.
- Limites connues du connecteur :
  - `ewpa/upload-image` n'importe que depuis une URL publique se terminant par une extension d'image.
  - `ewpa/search-replace` échoue si le texte cherché contient un antislash ; pour un remplacement complet, préférer `ewpa/update-post` avec tout le contenu.
- **Images :** les images du thème vont dans ce dépôt ; les illustrations d'articles et de pages vont dans la **médiathèque WordPress**. Boîte de dépôt prévue : partage Nextcloud de Marc (cloud.hdrive.net), puis import dans WordPress (à terme via un petit plugin « import depuis Nextcloud » authentifié — plugin séparé, pas dans ce thème).
- Style des illustrations : vectoriel plat aux couleurs de la charte (fond bleu nuit, accents vert et bleu acier), personnages simples.

## Règles générales

- Ne jamais committer de secret (mots de passe, jetons, clés d'application).
- Commits petits et explicites, en français.
- En cas de doute sur un contenu (prix, chiffres, promesses commerciales, noms de clients), demander à Marc plutôt que d'inventer.
