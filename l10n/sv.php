<?php
$TRANSLATIONS = array(
"Failed to clear the mappings." => "Fel vid rensning av mappningar",
"Failed to delete the server configuration" => "Misslyckades med att radera serverinställningen",
"The configuration is invalid: anonymous bind is not allowed." => "Denna konfiguration är ogiltig: anonymous bind är ej tillåten.",
"The configuration is valid and the connection could be established!" => "Inställningen är giltig och anslutningen kunde upprättas!",
"The configuration is valid, but the Bind failed. Please check the server settings and credentials." => "Konfigurationen är riktig, men Bind felade. Var vänlig och kontrollera serverinställningar och logininformation.",
"The configuration is invalid. Please have a look at the logs for further details." => "Inställningen är ogiltig. Vänligen se ownCloud-loggen för fler detaljer.",
"No action specified" => "Ingen åtgärd har angetts",
"No configuration specified" => "Ingen konfiguration har angetts",
"No data specified" => "Ingen data har angetts",
" Could not set configuration %s" => "Kunde inte sätta inställning %s",
"Action does not exist" => "Funktion existerar ej",
"The Base DN appears to be wrong" => "Den grundläggande DN verkar vara fel",
"Testing configuration…" => "Testar konfiguration...",
"Configuration incorrect" => "Felaktig konfiguration",
"Configuration incomplete" => "Konfigurationen är ej komplett",
"Configuration OK" => "Konfigurationen är OK",
"Select groups" => "Välj grupper",
"Select object classes" => "Välj objekt-klasser",
"Please check the credentials, they seem to be wrong." => "Var god kontrollera dina uppgifter, de verkar vara fel.",
"Please specify the port, it could not be auto-detected." => "Var god specificera en port, den kunde ej autodetekteras.",
"Base DN could not be auto-detected, please revise credentials, host and port." => "Grundläggande DN kunde ej autodetekteras, var god dubbelkontrollera dina uppgifter, värd och port.",
"Could not detect Base DN, please enter it manually." => "Kunde ej upptäcka Base DN, var god ange det manuellt.",
"{nthServer}. Server" => "{nthServer}. Server",
"No object found in the given Base DN. Please revise." => "Inget objekt funnet i den givna Base DN. Var god granska.",
"More than 1,000 directory entries available." => "Mer än 1,000 katalogposter tillgängliga.",
" entries available within the provided Base DN" => "Poster tillgängliga inom angivet Base DN",
"An error occurred. Please check the Base DN, as well as connection settings and credentials." => "Ett fel uppstod. Var god kontrollera Base DN, och även anslutningsinställningar och referenser.",
"Do you really want to delete the current Server Configuration?" => "Vill du verkligen radera den nuvarande serverinställningen?",
"Confirm Deletion" => "Bekräfta radering",
"Mappings cleared successfully!" => "Rensning av mappningar lyckades!",
"Error while clearing the mappings." => "Fel uppstod under rensning av mappningar",
"Anonymous bind is not allowed. Please provide a User DN and Password." => "Anonymous bind är inte tillåten. Var god ange en Användar-DN och lösenord.",
"LDAP Operations error. Anonymous bind might not be allowed." => "LDAP procedursfel. Anonymous bind tillåts troligtvis inte.",
"Saving failed. Please make sure the database is in Operation. Reload before continuing." => "Sparning misslyckades. Var god kontrollera att databasen är verksam. Ladda om innan du fortsätter.",
"Switching the mode will enable automatic LDAP queries. Depending on your LDAP size they may take a while. Do you still want to switch the mode?" => "Byte av läge kommer aktivera automatiska LDAP förfrågningar. Beroende på din LDAP storlek kan de ta ett tag. Vill du fortfarande ändra läge?",
"Mode switch" => "Lägesändring",
"Select attributes" => "Välj attribut",
"User not found. Please check your login attributes and username. Effective filter (to copy-and-paste for command line validation): <br/>" => "Användare inte hittad. Var god kontrollera din inloggnings attribut och användarnamn. Effektivt filter (för att kopiera och klistra in i kommandofönster validering):",
"User found and settings verified." => "Användare hittad och inställnings bekräftade.",
"An unspecified error occurred. Please check the settings and the log." => "Ett ospecificerat fel uppstod. Var god kontrollera inställningar och logfilen.",
"The search filter is invalid, probably due to syntax issues like uneven number of opened and closed brackets. Please revise." => "Sökfiltret är ej giltigt, antagligen på grund utav ett syntaxfel så som ojämnat antal öppna och stängda klammrar. Var god granska.",
"A connection error to LDAP / AD occurred, please check host, port and credentials." => "Ett anslutningsfel till LDAP / AD uppstod. Var god granska värd, port och inloggningsuppgifter.",
"Please provide a login name to test against" => "Vänligen ange ett användarnamn att testa mot",
"The group box was disabled, because the LDAP / AD server does not support memberOf." => "Gruppboxen var inaktiverad då LDAP / AD servern inte stödjer memberOf.",
"Server" => "Server",
"Users" => "Användare",
"Login Attributes" => "Inloggningsattribut",
"Groups" => "Grupper",
"_%s group found_::_%s groups found_" => array("%s grupp hittad","%s grupper hittade"),
"_%s user found_::_%s users found_" => array("%s användare hittad","%s användare hittade"),
"Could not detect user display name attribute. Please specify it yourself in advanced ldap settings." => "Kunde inte upptäcka attributet användarvisningsnamn. Vänligen ange det själv i de avancerade LDAP-inställningarna.",
"Could not find the desired feature" => "Det gick inte hitta den önskade funktionen",
"Invalid Host" => "Felaktig värd",
"Test Configuration" => "Testa konfigurationen",
"Help" => "Hjälp",
"Groups meeting these criteria are available in %s:" => "Grupper som uppfyller dessa kriterier finns i %s:",
"Only these object classes:" => "Endast dessa objektklasser:",
"Only from these groups:" => "Endast från dessa grupper:",
"Search groups" => "Sök grupper",
"Available groups" => "Tillgängliga grupper",
"Selected groups" => "Valda grupper",
"Edit LDAP Query" => "Redigera LDAP Query",
"LDAP Filter:" => "LDAP Filter:",
"The filter specifies which LDAP groups shall have access to the %s instance." => "Filtret specifierar vilka LDAD-grupper som ska ha åtkomst till %s instans",
"Verify settings and count groups" => "Verifiera inställningar och räkna grupper",
"When logging in, %s will find the user based on the following attributes:" => "Vid inloggning, kommer %s hitta användare baserat på följande attribut:",
"LDAP / AD Username:" => "LDAP / AD Användarnamn:",
"Other Attributes:" => "Övriga attribut:",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action. Example: \"uid=%%uid\"" => "Definierar filter som tillämpas vid inloggning. %%uid ersätter användarnamn vid inloggningen. Exempel: \"uid=%%uid\"",
"Test Loginname" => "Testa inloggningsnamn",
"Verify settings" => "Verifiera inställningar",
"1. Server" => "1. Server",
"%s. Server:" => "%s. Server:",
"Delete the current configuration" => "Ta bort nuvarande konfiguration",
"Host" => "Server",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Du behöver inte ange protokoll förutom om du använder SSL. Starta då med ldaps://",
"Port" => "Port",
"Detect Port" => "Upptäck port",
"User DN" => "Användar-DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "DN för användaren som skall användas, t.ex. uid=agent, dc=example, dc=com. För anonym åtkomst, lämna DN och lösenord tomt.",
"Password" => "Lösenord",
"For anonymous access, leave DN and Password empty." => "För anonym åtkomst, lämna DN och lösenord tomt.",
"One Base DN per line" => "Ett start-DN per rad",
"You can specify Base DN for users and groups in the Advanced tab" => "Du kan ange start-DN för användare och grupper under fliken Avancerat",
"Detect Base DN" => "Upptäck Bas-DN",
"Test Base DN" => "Testa Bas-DN",
"Avoids automatic LDAP requests. Better for bigger setups, but requires some LDAP knowledge." => "Undviker automatiska LDAP-förfrågningar. Bättre för större installationer, men kräver en del LDAP-kunskap.",
"Manually enter LDAP filters (recommended for large directories)" => "Ange LDAP-filter manuellt (rekommenderat för stora kataloger)",
"The filter specifies which LDAP users shall have access to the %s instance." => "Filtret specifierar vilka LDAP-användare som skall ha åtkomst till %s instans",
"Verify settings and count users" => "Verifiera inställningar och räkna användare",
"Saving" => "Sparar",
"Back" => "Tillbaka",
"Continue" => "Fortsätt",
"LDAP" => "LDAP",
"Expert" => "Expert",
"Advanced" => "Avancerad",
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behavior. Please ask your system administrator to disable one of them." => "<b>Varning:</b> Apps user_ldap och user_webdavauth är inkompatibla. Oväntade problem kan uppstå. Be din systemadministratör att inaktivera en av dem.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Varning:</b> PHP LDAP - modulen är inte installerad, serversidan kommer inte att fungera. Kontakta din systemadministratör för installation.",
"Connection Settings" => "Uppkopplingsinställningar",
"Configuration Active" => "Konfiguration aktiv",
"When unchecked, this configuration will be skipped." => "Ifall denna är avbockad så kommer konfigurationen att skippas.",
"Backup (Replica) Host" => "Säkerhetskopierings-värd (Replika)",
"Give an optional backup host. It must be a replica of the main LDAP/AD server." => "Ange en valfri värd för säkerhetskopiering. Den måste vara en replika av den huvudsakliga LDAP/AD-servern",
"Backup (Replica) Port" => "Säkerhetskopierins-port (Replika)",
"Disable Main Server" => "Inaktivera huvudserver",
"Only connect to the replica server." => "Anslut endast till replikaservern.",
"Turn off SSL certificate validation." => "Stäng av verifiering av SSL-certifikat.",
"Not recommended, use it for testing only! If connection only works with this option, import the LDAP server's SSL certificate in your %s server." => "Rekommenderas inte, använd endast för test! Om anslutningen bara fungerar med denna inställning behöver du importera LDAP-serverns SSL-certifikat till din %s server.",
"Cache Time-To-Live" => "Cache Time-To-Live",
"in seconds. A change empties the cache." => "i sekunder. En förändring tömmer cache.",
"Directory Settings" => "Mappinställningar",
"User Display Name Field" => "Attribut för användarnamn",
"The LDAP attribute to use to generate the user's display name." => "LDAP-attributet som ska användas för att generera användarens visningsnamn.",
"Base User Tree" => "Bas för användare i katalogtjänst",
"One User Base DN per line" => "En användarstart-DN per rad",
"User Search Attributes" => "Användarsökningsattribut",
"Optional; one attribute per line" => "Valfritt; ett attribut per rad",
"Group Display Name Field" => "Attribut för gruppnamn",
"The LDAP attribute to use to generate the groups's display name." => "LDAP-attributet som ska användas för att generera gruppens visningsnamn.",
"Base Group Tree" => "Bas för grupper i katalogtjänst",
"One Group Base DN per line" => "En gruppstart-DN per rad",
"Group Search Attributes" => "Gruppsökningsattribut",
"Group-Member association" => "Attribut för gruppmedlemmar",
"Nested Groups" => "Undergrupper",
"When switched on, groups that contain groups are supported. (Only works if the group member attribute contains DNs.)" => "När den är påslagen, stöds grupper som innehåller grupper. (Fungerar endast om gruppmedlemmens attribut innehåller DN.)",
"Paging chunksize" => "Paging klusterstorlek",
"Chunksize used for paged LDAP searches that may return bulky results like user or group enumeration. (Setting it 0 disables paged LDAP searches in those situations.)" => "Klusterstorlek som används för paged LDAP sökningar som kan komma att returnera skrymmande resultat som uppräknande av användare eller grupper. (Inställning av denna till 0 inaktiverar paged LDAP sökningar i de situationerna)",
"Special Attributes" => "Specialattribut",
"Quota Field" => "Kvotfält",
"Quota Default" => "Datakvot standard",
"Email Field" => "E-postfält",
"User Home Folder Naming Rule" => "Namnregel för hemkatalog",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Lämnas tomt för användarnamn (standard). Ange annars ett LDAP-/AD-attribut.",
"Internal Username" => "Internt användarnamn",
"By default the internal username will be created from the UUID attribute. It makes sure that the username is unique and characters do not need to be converted. The internal username has the restriction that only these characters are allowed: [ a-zA-Z0-9_.@- ].  Other characters are replaced with their ASCII correspondence or simply omitted. On collisions a number will be added/increased. The internal username is used to identify a user internally. It is also the default name for the user home folder. It is also a part of remote URLs, for instance for all *DAV services. With this setting, the default behavior can be overridden. To achieve a similar behavior as before ownCloud 5 enter the user display name attribute in the following field. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users." => "Som standard skapas det interna användarnamnet från UUID-attributet. Det säkerställer att användarnamnet är unikt och tecken inte behöver konverteras. Det interna användarnamnet har restriktionerna att endast följande tecken är tillåtna:  [ a-zA-Z0-9_.@- ]. Andra tecken blir ersatta av deras motsvarighet i ASCII eller utelämnas helt. En siffra kommer att läggas till eller ökas på vid en kollision. Det interna användarnamnet används för att identifiera användaren internt. Det är även förvalt som användarens användarnamn i ownCloud. Det är även en port för fjärråtkomst, t.ex. för alla *DAV-tjänster. Med denna inställning kan det förvalda beteendet åsidosättas. För att uppnå ett liknande beteende som innan ownCloud 5, ange attributet för användarens visningsnamn i detta fält. Lämna det tomt för förvalt beteende. Ändringarna kommer endast att påverka nyligen mappade (tillagda) LDAP-användare",
"Internal Username Attribute:" => "Internt användarnamnsattribut:",
"Override UUID detection" => "Åsidosätt UUID-detektion",
"By default, the UUID attribute is automatically detected. The UUID attribute is used to doubtlessly identify LDAP users and groups. Also, the internal username will be created based on the UUID, if not specified otherwise above. You can override the setting and pass an attribute of your choice. You must make sure that the attribute of your choice can be fetched for both users and groups and it is unique. Leave it empty for default behavior. Changes will have effect only on newly mapped (added) LDAP users and groups." => "Som standard upptäcker ownCloud automatiskt UUID-attributet. Det UUID-attributet används för att utan tvivel identifiera LDAP-användare och grupper. Dessutom kommer interna användarnamn skapas baserat på detta UUID, om inte annat anges ovan. Du kan åsidosätta inställningen och passera ett attribut som du själv väljer. Du måste se till att attributet som du väljer kan hämtas för både användare och grupper och att det är unikt. Lämna det tomt för standard beteende. Förändringar kommer endast att påverka nyligen mappade (tillagda) LDAP-användare och grupper.",
"UUID Attribute for Users:" => "UUID-attribut för användare:",
"UUID Attribute for Groups:" => "UUID-attribut för grupper:",
"Username-LDAP User Mapping" => "Användarnamn-LDAP användarmappning",
"Clear Username-LDAP User Mapping" => "Rensa användarnamn-LDAP användarmappning",
"Clear Groupname-LDAP Group Mapping" => "Rensa gruppnamn-LDAP gruppmappning"
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
