## Projetct
1. composer require laravel/breeze --dev
2. php artisan breeze:install
3. php artisan migrate 
4. npm install
5. npm run dev
6. php artisan make:migration create_affiliations
7. php artisan make:migration create_acessLevel
8. php artisan make:migration add_column_affiliationid_and_acesslevelid --table=users
9. php artisan migrate
10. php artisan make:model Affiliation
11. php artisan make:migration create_researches_table
12. php artisan make:model Research
13. php artisan migrate
14. php artisan make:controller ResearchController --resource
15. php artisan make:migration add_column_feedback --table=researches
16. php artisan make:middleware EnsureUserHasAccessLevel
17. php artisan make:controller ResearchanAlysisController -r
18. php artisan make:rule ValidCpf
19. php artisan make:seeder AccessLevelsTableSeeder
20. php artisan make:seeder AffiliationsTableSeeder
21. php artisan make:seeder StatusSeeder




# Run to project
1. Run git clone
2. Run composer install
3. Run cp .env.example .env
4. Run php artisan key:generate
5. Run npm run build
6. Run php artisan migrate, before set conf to database
7. Run php artisan db:seed --class=AccessLevelsTableSeeder
8. Run php artisan db:seed --class=AffiliationsTableSeeder
9. Run php artisan db:seed --class=StatusSeeder
10. Run npm run dev
11. Run php artisa serve
Go to link localhost

