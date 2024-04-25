# Laborator Containers07 - Integrare continuă cu GitHub Actions

## Scopul lucrării

Scopul acestei lucrări de laborator este de a învăța să configurăm integrarea continuă (CI - Continuous Integration) cu ajutorul GitHub Actions. Vom crea o aplicație web simplă pe baza PHP, vom scrie teste pentru aceasta și vom configura integrarea continuă pentru a rula aceste teste în mod automat de fiecare dată când se fac modificări în cod.

## Sarcina

1. Crearea unei aplicații web pe baza PHP.
2. Scrierea testelor pentru această aplicație.
3. Configurarea integrării continue cu GitHub Actions pentru a rula automat testele.

## Descrierea efectuării lucrării

### 1. Pregătirea proiectului

- Am creat un director numit `containers07` și am copiat proiectul pe computerul nostru.
- Am configurat structura proiectului conform cerințelor și am creat fișierele necesare, inclusiv clasele pentru lucrul cu baza de date și paginile web, precum și fișierele de testare.

### 2. Implementarea aplicației web

- Am creat o aplicație web simplă pe baza PHP, care utilizează o bază de date SQLite pentru stocarea datelor.
- Am scris clasele `Database` și `Page` conform cerințelor, pentru a gestiona baza de date și afișarea paginilor web.

### 3. Scrierea testelor

- Am scris teste pentru funcțiile și metodele definite în aplicație, folosind un mic framework de testare implementat în fișierul `testframework.php`.
- Am asigurat că teste acoperă diferite aspecte ale funcționalității, inclusiv conexiunea la baza de date, numărul de înregistrări din tabele, crearea, citirea, actualizarea și ștergerea datelor.

### 4. Configurarea integrării continue cu GitHub Actions

- Am creat un fișier de configurare pentru GitHub Actions (`main.yml`) pentru a automatiza rularea testelor la fiecare push pe branch-ul `main`.
- Am definit pașii necesari pentru a construi imaginea Docker, a crea și a porni un container pentru testare, a rula testele și a opri și șterge containerul după finalizare.

### 5. Testarea și finalizarea

- Am adăugat toate modificările în repozitoriul GitHub și am urmărit progresul testelor în fila "Actions".
- După finalizarea testelor cu succes, am ajuns la concluzia că integrarea continuă a fost configurată cu succes și că aplicația noastră este funcțională.

## Concluzii

Prin realizarea acestei lucrări de laborator, am învățat cum să configurăm integrarea continuă cu ajutorul GitHub Actions pentru un proiect bazat pe PHP. Am înțeles importanța testelor automate într-un proces de dezvoltare și am dobândit abilități în implementarea și rularea acestora într-un mediu de integrare continuă. Acest lucru ne permite să avem încredere în calitatea codului nostru și să automatizăm procesul de testare, contribuind la eficiența și fiabilitatea proiectului nostru.
