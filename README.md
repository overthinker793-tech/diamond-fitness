# Diamond Fitness — фитнес-клубтың веб-сайты

## Жобаның мақсаты

Diamond Fitness фитнес-клубына арналған веб-сайттың бастапқы нұсқасын әзірлеу, құжаттамасын GitHub-та сақтау және PHP + Apache + MySQL ортасын Docker арқылы іске қосу.

## Қолданылатын технологиялар

- **PHP 8.3** — динамикалық беттер және өтінім формасын өңдеу.
- **HTML5 және CSS3** — сайттың құрылымы, адаптивті дизайн.
- **JavaScript** — мобильді навигация мәзірі.
- **Apache** — веб-сервер.
- **MySQL 8.4** — мүшелікке өтінімдерді сақтау.
- **Docker және Docker Compose** — веб-сервер мен дерекқорды контейнерлерде басқару.
- **Git және GitHub** — нұсқаларды басқару және кодты ортақ сақтау.

## Негізгі мүмкіндіктер

- `index.php` — басты бет және клуб туралы ақпарат.
- `programs.php` — жаттығу бағдарламалары мен үлгі мүшелік жоспарлары.
- `contact.php` — байланыс ақпараты және мүшелікке өтінім формасы.
- `includes/db.php` — қоршаған орта айнымалылары арқылы MySQL-ге қосылу.
- `database/init.sql` — өтінімдер кестесін алғашқы рет құру.
- `css/style.css` — адаптивті қара және лайм түсті дизайн.
- `js/main.js` — мобильді мәзірді басқару.
- `Dockerfile` — PHP 8.3 + Apache image құру.
- `compose.yaml` — веб және MySQL сервистерін іске қосу.

> Ескерту: Diamond Fitness — оқу жобасына арналған үлгі. Мүшелік жоспарларының бағалары, мекенжайы және телефон нөмірі демонстрациялық деректер. Нақты деректерді өз жобаңа сай ауыстыр.

## 1. Алғышарттар

Компьютерде Git, Docker Desktop және Visual Studio Code орнатылған болуы керек. Docker Desktop іске қосулы тұруы қажет.

## 2. Құпия айнымалылар файлын дайындау

Жоба бумасының ішінде `.env.example` файлын `.env` деп көшір:

**Windows PowerShell:**

```powershell
Copy-Item .env.example .env
```

**macOS / Linux:**

```bash
cp .env.example .env
```

`.env` файлын ашып, `MYSQL_PASSWORD` және `MYSQL_ROOT_PASSWORD` мәндерін әртүрлі, ұзын кездейсоқ парольдерге өзгерт. `.env` файлы құпия болғандықтан GitHub-қа жүктелмеуі керек. `.gitignore` оны Git бақылауынан шығарады. Репозиторийге тек `.env.example` үлгісі салынады.

## 3. Docker image құру

Жоба бумасында терминал ашып, орында:

```bash
docker build -t diamond-fitness:latest .
```

## 4. Веб-серверді жеке іске қосу

Тек PHP + Apache бетін тексеру үшін:

```bash
docker run --rm -p 8080:80 diamond-fitness:latest
```

Браузерден `http://localhost:8080` аш. Тоқтату үшін терминалда `Ctrl+C` бас. Бұл жеке режимде MySQL сервисі іске қосылмайды, сондықтан өтінім формасы дерекқорға сақталмайды.

## 5. Веб-сайт пен MySQL-ді бірге іске қосу

Алдымен `.env` файлын жоғарыдағы нұсқаумен жаса. Содан кейін:

```bash
docker compose up -d --build
```

Сайт: `http://localhost:8080`

Қызметтердің күйі:

```bash
docker compose ps
```

Логтарды көру:

```bash
docker compose logs -f
```

Сайттағы «Байланыс» бетінің формасын жібергенде өтінім `membership_leads` MySQL кестесіне сақталады.

## 6. Контейнерлерді тоқтату

Контейнерлерді уақытша тоқтату:

```bash
docker compose stop
```

Контейнерлерді тоқтатып, оларды жою:

```bash
docker compose down
```

Контейнерлермен бірге дерекқор көлемін де жою (барлық сақталған өтінімдер өшіріледі):

```bash
docker compose down -v
```

## 7. GitHub репозиторийіне жүктеу

GitHub-та `diamond-fitness` атауымен жаңа репозиторий жаса. Одан кейін осы жоба бумасында терминал ашып орында:

```bash
git init
git branch -M main
git add .
git status
git commit -m "Add Diamond Fitness website and Docker setup"
git remote add origin https://github.com/USERNAME/diamond-fitness.git
git push -u origin main
```

`USERNAME` орнына өз GitHub логиніңді жаз. Егер `origin` қашықтағы репозиторийі бұрын қосылған болса, `git remote add origin ...` командасын қайталап орындама; алдымен `git remote -v` арқылы тексер.

Құпия файл GitHub-қа қосылмағанын тексер:

```bash
git status
git check-ignore .env
```

`git check-ignore .env` командасы `.env` файлын ignore ережесі ұстап тұрғанын көрсетуі керек. `.env` ешқашан репозиторийге commit жасалмауы тиіс.

## 8. Негізгі файлдар

| Файл | Қызметі |
|---|---|
| `README.md` | Жоба сипаттамасы және іске қосу нұсқаулығы |
| `Dockerfile` | PHP + Apache контейнер image-і |
| `compose.yaml` | Веб-сервер мен MySQL сервистері |
| `.env.example` | Қауіпсіз түрде көшірілетін айнымалылар үлгісі |
| `.gitignore` | `.env` секілді жергілікті құпияларды Git-тен шығару |
| `.dockerignore` | Docker image ішіне қажет емес файлдарды қоспау |
| `database/init.sql` | MySQL кестесін бастапқы жасау |

## Қорытынды

Diamond Fitness жобасы веб-сайтты, README құжаттамасын, PHP + Apache Dockerfile-ын және MySQL сервисімен Compose конфигурациясын қамтиды. Құпиясөздер `.env` арқылы беріледі; GitHub репозиторийінде тек `.env.example` үлгісі сақталуы керек.
