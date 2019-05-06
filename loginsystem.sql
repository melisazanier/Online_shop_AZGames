-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 05, 2018 la 05:10 PM
-- Versiune server: 10.1.36-MariaDB
-- Versiune PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `loginsystem`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_id_product` int(11) NOT NULL,
  `cart_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_price` decimal(4,2) NOT NULL,
  `product_reduced_price` decimal(4,2) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_game_genre` varchar(255) NOT NULL,
  `product_release_date` varchar(255) NOT NULL,
  `product_year` int(11) NOT NULL,
  `product_system_requirements` text NOT NULL,
  `product_youtube_link` varchar(255) NOT NULL,
  `product_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_reduced_price`, `product_image1`, `product_image2`, `product_image3`, `product_description`, `product_game_genre`, `product_release_date`, `product_year`, `product_system_requirements`, `product_youtube_link`, `product_type`) VALUES
(1, 'Far Cry 5', '53.44', '20.60', 'productsPhotos/Far_Cry_5/Far_Cry_5.png', 'productsPhotos/Far_Cry_5/wallpaper_01.jpg', 'productsPhotos/Far_Cry_5/wallpaper_05.jpg', 'Far Cry comes to America in the latest installment of the award-winning franchise.\r\nWelcome to Hope County, Montana, land of the free and the brave but also home to a fanatical doomsday cult known as Eden’s Gate. Stand up to cult leader Joseph Seed, and his siblings, the Heralds, to spark the fires of resistance and liberate the besieged community.\r\nFIGHT AGAINST A DEADLY CULT\r\nFree Hope County in solo or two-player co-op. Recruit Guns and Fangs for hire to help defeat the cult.\r\nA WORLD THAT HITS BACK\r\nWreak havoc on the cult and its members but beware of the wrath of Joseph Seed and his followers.\r\nCARVE YOUR OWN PATH\r\nBuild your character and choose your adventure in the largest customizable Far Cry game ever!\r\nDYNAMIC TOYS\r\nTake control of iconic muscle cars, ATV\'s, planes and a lot more to engage the cult forces in epic fights.\r\nRE-DEFINED STEALTH MECHANICS\r\nEnhance your gameplay with eye tracking. Tag enemies by looking at them to increase your stealth skills and help your teammates spot threats. \r\nCompatible with all Tobii Eye Tracking gaming devices.', 'Open World / Action / FPS / Co-op / Multiplayer', '27 Mar, 2018', 2018, 'MINIMUM: Requires a 64-bit processor and operating system OS: Windows 7 SP1, Windows 8.1, Windows 10 (64-bit versions only) Processor: Intel Core i5-2400 @ 3.1 GHz or AMD FX-6300 @ 3.5 GHz or equivalent Memory: 8 GB RAM Graphics: NVIDIA GeForce GTX 670 or AMD R9 270 (2GB VRAM with Shader Model 5.0 or better) DirectX: Version 9.0c Network: Broadband Internet connection Storage: 40 GB available space Additional Notes: Game contains EasyAntiCheat', '7KRnOXQswrk', 'product'),
(2, 'Assassin\'s Creed Odyssey', '49.19', '-1.00', 'productsPhotos/Assassin_Creed_Odyssey/Assassins_Creed_Odyssey.png', 'productsPhotos/Assassin_Creed_Odyssey/wallpaper_03.jpg', 'productsPhotos/Assassin_Creed_Odyssey/wallpaper_05.jpg', 'Choose your fate in Assassin\'s Creed® Odyssey.\r\nFrom outcast to living legend, embark on an odyssey to uncover the secrets of your past and change the fate of Ancient Greece.\r\nTRAVEL TO ANCIENT GREECE \r\nFrom lush vibrant forests to volcanic islands and bustling cities, start a journey of exploration and encounters in a war torn world shaped by gods and men.\r\nFORGE YOUR LEGEND\r\nYour decisions will impact how your odyssey unfolds. Play through multiple endings thanks to the new dialogue system and the choices you make. Customize your gear, ship, and special abilities to become a legend.\r\nFIGHT ON A NEW SCALE\r\nDemonstrate your warrior\'s abilities in large scale epic battles between Athens and Sparta featuring hundreds of soldiers, or ram and cleave your way through entire fleets in naval battles across the Aegean Sea.\r\nGAZE IN WONDER\r\nExperience the action in a whole new light with Tobii Eye Tracking. The Extended View feature gives you a broader perspective of the environment, and the Dynamic Light and Sun Effects immerse you in the sandy dunes according to where you set your sights. Tagging, aiming and locking on your targets becomes a lot more natural when you can do it by looking at them. Let your vision lead the way and enhance your gameplay. \r\n', 'Open World / Action / RPG / Singleplayer / Stealth', '5 Oct, 2018', 2018, 'MINIMUM: OS: Windows 7 SP1, Windows 8.1, Windows 10 (64bit versions only) Processor: AMD FX 6300 @ 3.8 GHz, Ryzen 3 - 1200, Intel Core i5 2400 @ 3.1 GHz (MORE DETAILS HERE) Memory: 8 GB RAM Graphics: AMD Radeon R9 285, NVIDIA GeForce GTX 660 (2GB VRAM with Shader Model 5.0) (MORE DETAILS HERE) DirectX: Version 11 Storage: 46+ GB available space Additional Notes: Video Preset: Lowest (720p)', 's_SJZSAtLBA', 'type'),
(5, 'Batman Arkham Knight', '51.99', '15.99', 'productsPhotos/Batman_Arkham_Knight/Batman_Arkham_Knight.png', 'productsPhotos/Batman_Arkham_Knight/wallpaper_01.jpg', 'productsPhotos/Batman_Arkham_Knight/wallpaper_06.jpg', 'Batman: Arkham Knight brings the award-winning Arkham trilogy from Rocksteady Studios to its epic conclusion. Developed exclusively for New-Gen platforms, Batman: Arkham Knight introduces Rocksteady\'s uniquely designed version of the Batmobile. The highly anticipated addition of this legendary vehicle, combined with the acclaimed gameplay of the Arkham series, offers gamers the ultimate and complete Batman experience as they tear through the streets and soar across the skyline of the entirety of Gotham City. In this explosive finale, Batman faces the ultimate threat against the city that he is sworn to protect, as Scarecrow returns to unite the super criminals of Gotham and destroy the Batman forever. Product Features: “Be The Batman” – Live the complete Batman experience as the Dark Knight enters the concluding chapter of Rocksteady’s Arkham trilogy. Players will become The World’s Greatest Detective like never before with the introduction of the Batmobile and enhancements to signature features such as FreeFlow Combat, stealth, forensics and navigation. ', 'Batman / Action / Open World / Superhero / Dark', '23 Jun, 2015', 2015, 'MINIMUM: Requires a 64-bit processor and operating system OS: Win 7 SP1, Win 8.1 (64-bit Operating System Required) Processor: Intel Core i5-750, 2.67 GHz | AMD Phenom II X4 965, 3.4 GHz Memory: 6 GB RAM Graphics: Graphics: NVIDIA GeForce GTX 660 (2 GB Memory Minimum) | AMD Radeon HD 7870 (2 GB Memory Minimum) DirectX: Version 11 Network: Broadband Internet connection Storage: 45 GB available space', 'dxa34RatmSc', ''),
(7, 'Cuphead', '44.79', '30.00', 'productsPhotos/Cuphead/Cuphead.png', 'productsPhotos/Cuphead/wallpaper_02.jpg', 'productsPhotos/Cuphead/wallpaper_03.jpg', 'Cuphead is a classic run and gun action game heavily focused on boss battles. Inspired by cartoons of the 1930s, the visuals and audio are painstakingly created with the same techniques of the era, i.e. traditional hand drawn cel animation, watercolor backgrounds, and original jazz recordings. Play as Cuphead or Mugman (in single player or local co-op) as you traverse strange worlds, acquire new weapons, learn powerful super moves, and discover hidden secrets while you try to pay your debt back to the devil!', 'Difficult / Cartoon / Platformer / Great Soundtrack', '29 Sep, 2017', 2017, 'MINIMUM: OS: Windows 7 Processor: Intel Core2 Duo E8400, 3.0GHz or AMD Athlon 64 X2 6000+, 3.0GHz or higher Memory: 2 GB RAM Graphics: Geforce 9600 GT or AMD HD 3870 512MB or higher DirectX: Version 9.0 Storage: 20 GB available space', 'D-1n15aIgsE', ''),
(9, 'Middle Earth Shadow of War', '50.00', '34.90', 'productsPhotos/Middle_Earth_Shadow_of_War/Middle_Earth_Shadow_of_War.png', 'productsPhotos/Middle_Earth_Shadow_of_War/wallpaper_01.jpg', 'productsPhotos/Middle_Earth_Shadow_of_War/wallpaper_03.jpg', 'Go behind enemy lines to forge your army, conquer Fortresses and dominate Mordor from within. Experience how the award winning Nemesis System creates unique personal stories with every enemy and follower, and confront the full power of the Dark Lord Sauron and his Ringwraiths in this epic new story of Middle-earth.  In Middle-earth™: Shadow of War™, nothing will be forgotten.', 'Open World / Action / RPG / Fantasy / Adventure', '10 Oct, 2017', 2017, 'MINIMUM: Requires a 64-bit processor and operating system OS: Windows 7 SP1 with Platform Update Processor: AMD FX-4350, 4.2 GHz / Intel Core i5-2300, 2.80 GHz Memory: 6 GB RAM Graphics: AMD HD 7870, 2 GB / NVIDIA GTX 660, 2 GB DirectX: Version 11 Network: Broadband Internet connection Storage: 70 GB available space Additional Notes: X64 required', '-iToFyvxbWQ', ''),
(10, 'Star Wars Battlefront II', '48.50', '-1.00', 'productsPhotos/Star_Wars_Battlefront_2/Star_Wars_Battlefront_II.png', 'productsPhotos/Star_Wars_Battlefront_2/wallpaper_01.jpg', 'productsPhotos/Star_Wars_Battlefront_2/wallpaper_03.jpg', 'With brand new space combat, playable Jedi characters, and over 16 all new battlefronts, Star Wars Battlefront II gives you more ways than ever before to play the classic Star Wars battles any way you want.  Enhanced Single-Player Experience - Join the rise of Darth Vader’s elite 501st Legion of Stormtroopers as you fight through an all new story-based saga where every action you take impacts the battlefront and, ultimately, the fate of the Star Wars galaxy. All New Classic Trilogy Locations - Fight inside the corridors of the second Death Star, in the marshy swamps of Dagobah, and even aboard the Tantive IV, Princess Leia’s Blockade Runner, as seen at the beginning of Star Wars Episode IV: A New Hope.', 'Star Wars / Action / Multiplayer / Shooter / Sci-fi', '1 Nov, 2005', 2005, 'MINIMUM: OS: Windows 2000, XP, Vista, 8, or 10 Processor: Intel Pentium 4 1.5 GHz or Athlon XP 1500+ Memory: 256 MB Graphics: 64MB 3d Graphics card with Vertex Shader and Pixel Shader (VS/PS) Capability DirectX®: 9.0c', '_q51LZ2HpbE', ''),
(11, 'Call of Duty 4 Remastered', '53.99', '-1.00', 'productsPhotos/Call_of_Duty_Modern_War_are_Remastered/Call_of_Duty_4_Remastered.png', 'productsPhotos/Call_of_Duty_Modern_War_are_Remastered/wallpaper_01.jpg', 'productsPhotos/Call_of_Duty_Modern_War_are_Remastered/wallpaper_04.jpg', 'One of the most critically-acclaimed games in history, Call of Duty: Modern Warfare is back, remastered in true high-definition, featuring improved textures, physically based rendering, high-dynamic range lighting and much more. Developed by Infinity Ward, the award-winning Call of Duty® 4: Modern Warfare® set a new standard upon its release for intense, cinematic action, while receiving universal praise as one of the most influential video games of all-time. Winner of numerous Game of the Year honors, Call of Duty 4: Modern Warfare became an instant classic and global phenomenon that set the bar for first-person shooters, and now it returns for a new generation of fans. Relive one of the most iconic campaigns in history, as you are transported around the globe, including fan favorite missions \"All Ghillied Up,\" \"Mile High Club,\" and \"Crew Expendable.\" You’ll suit up as unforgettable characters Sgt. John \"Soap\" MacTavish, Capt. ', 'Action / FPS / Multiplayer / Violent / Shooter', '27 Jul, 2017', 2017, 'MINIMUM: Requires a 64-bit processor and operating system OS: Windows 7 64-Bit or later Processor: Intel Core i3-3225 @ 3.30GHz or equivalent Memory: 8 GB RAM Graphics: NVIDIA GeForce GTX 660 2GB / AMD Radeon HD 7850 2GB DirectX: Version 11 Network: Broadband Internet connection Sound Card: DirectX 11 Compatible', 'l-eMi1xJ2dM', ''),
(12, 'Call of Duty Black Ops 4', '49.90', '27.20', 'productsPhotos/Call_of_Duty_Black_Ops_4/Call_of_Duty_Black_Ops_4.png', 'productsPhotos/Call_of_Duty_Black_Ops_4/wallpaper_02.jpeg', 'productsPhotos/Call_of_Duty_Black_Ops_4/wallpaper_03.jpg', 'Call of Duty®: Black Ops III Zombies Chronicles Edition includes the full base game and the Zombies Chronicles content expansion. Call of Duty: Black Ops III combines three unique game modes: Campaign, Multiplayer, and Zombies, providing fans with the deepest and most ambitious Call of Duty ever. The Zombies Chronicles content expansion delivers 8 remastered classic Zombies maps from Call of Duty®: World at War, Call of Duty®: Black Ops and Call of Duty®: Black Ops II. Complete maps from the original saga are fully remastered and HD playable within Call of Duty®: Black Ops III.', 'Multiplayer / FPS / Zombies / Action / Shooter', '6 Nov, 2015', 2015, 'MINIMUM: OS: Windows 7 64-Bit / Windows 8 64-Bit / Windows 8.1 64-Bit Processor: Intel® Core™ i3-530 @ 2.93 GHz / AMD Phenom™ II X4 810 @ 2.60 GHz Memory: 6 GB RAM Graphics: NVIDIA® GeForce® GTX 470 @ 1GB / ATI® Radeon™ HD 6970 @ 1GB DirectX: Version 11 Network: Broadband Internet connection Storage: 100 GB available space Sound Card: DirectX Compatible', '6kqe2ICmTxc', ''),
(13, 'Dark Souls III', '41.50', '-1.00', 'productsPhotos/Dark_Souls_3/Dark_Souls_3.png', 'productsPhotos/Dark_Souls_3/wallpaper_01.jpg', 'productsPhotos/Dark_Souls_3/wallpaper_02.jpg', 'Get the DARK SOULS III Season Pass now and challenge yourself with all the available content! Winner of gamescom award 2015 \"Best RPG\" and over 35 E3 2015 Awards and Nominations. DARK SOULS III continues to push the boundaries with the latest, ambitious chapter in the critically-acclaimed and genre-defining series. ', 'Dark / Fantasy / Difficult / RPG / Atmospheric / PvP', '11 Apr, 2016', 2016, 'MINIMUM: OS: Windows 7 SP1 64bit, Windows 8.1 64bit Windows 10 64bit Processor: Intel Core i3-2100 / AMD® FX-6300 Memory: 4 GB RAM Graphics: NVIDIA® GeForce GTX 750 Ti / ATI Radeon HD 7950 DirectX: Version 11 Network: Broadband Internet connection Storage: 25 GB available space Sound Card: DirectX 11 sound device', '_zDZYrIUgKE', ''),
(14, 'Sniper Elite 4', '52.10', '-1.00', 'productsPhotos/Sniper_Elite_4/Sniper_Elite_4.png', 'productsPhotos/Sniper_Elite_4/wallpaper_01.jpg', 'productsPhotos/Sniper_Elite_4/wallpaper_04.jpg', 'Discover unrivalled sniping freedom in the largest and most advanced World War 2 shooter ever built. Experience tactical third-person combat, gameplay choice and epic longshots across gigantic levels as you liberate wartime Italy from the grip of Fascism.  Set in the aftermath of its award-winning predecessor, Sniper Elite 4 transports players across the beautiful Italian peninsula, from sun-drenched Mediterranean coastal towns, to ancient forests, mountain valleys and colossal Nazi megastructures. Covert agent and elite marksman Karl Fairburne must fight alongside the brave men and women of the Italian Resistance and defeat a terrifying new threat with the potential to halt the Allied fightback in Europe before it’s even begun.', 'Sniper / Multiplayer /  Action / Co-op', '14 Feb, 2017', 2017, 'MINIMUM: OS: 64-bit Windows 7, 64-bit Windows 8.1 or 64-bit Windows 10 Processor: Intel CPU Core i3-2100 or AMD equivalent Memory: 4 GB RAM Graphics: AMD Radeon HD 7870 (2GB) or NVIDIA GeForce GTX 660 (2GB)', 'lGBRAEvXZ94', ''),
(15, 'Wolfenstein The New Colossus', '44.99', '-1.00', 'productsPhotos/Wolfenstein_The_New_Colossus/Wolfenstein_The_New_Colossus.png', 'productsPhotos/Wolfenstein_The_New_Colossus/wallpaper_01.jpeg', 'productsPhotos/Wolfenstein_The_New_Colossus/wallpaper_04.jpg', 'Wolfenstein® II: The New Colossus is the highly anticipated sequel to the critically acclaimed, Wolfenstein®: The New Order developed by the award-winning studio MachineGames.  An exhilarating adventure brought to life by the industry-leading id Tech® 6, Wolfenstein® II sends players to Nazi-controlled America on a mission to recruit the boldest resistance leaders left. Fight the Nazis in iconic American locations, equip an arsenal of badass guns, and unleash new abilities to blast your way through legions of Nazi soldiers in this definitive first-person shooter. STORY: America, 1961. Your assassination of Nazi General Deathshead was a short-lived victory. Despite the setback, the Nazis maintain their stranglehold on the world. You are BJ Blazkowicz, aka “Terror-Billy,” member of the Resistance, scourge of the Nazi empire, and humanity’s last hope for liberty. Only you have the guts, guns, and gumption to return stateside, kill every Nazi in sight, and spark the second American Revolution.', 'FPS / Action / Shooter / Alternate History / Violent / Singleplayer', '27 Oct, 2017', 2017, 'MINIMUM: Requires a 64-bit processor and operating system OS: Win7, 8.1, or 10 (64-Bit versions) Processor: AMD FX-8350/Ryzen 5 1400 or Intel Core i5-3570/i7-3770 Memory: 8 GB RAM Graphics: Nvidia GTX 770 4GB/AMD Radeon R9 290 4GB or better Storage: 55 GB available space', 'bkrwUzWeACg', ''),
(16, 'Wolfenstein The New Order', '55.00', '-1.00', 'productsPhotos/Wolfenstein_The_New_Order/Wolfenstein_The_New_Order.png', 'productsPhotos/Wolfenstein_The_New_Order/wallpaper_02.jpg', 'productsPhotos/Wolfenstein_The_New_Order/wallpaper_03.jpg', 'Wolfenstein®: The New Order reignites the series that created the first-person shooter genre. Under development at MachineGames, a studio comprised of a seasoned group of developers recognized for their work creating story-driven games, Wolfenstein offers a deep game narrative packed with action, adventure and first-person combat.  Intense, cinematic and rendered in stunning detail with id® Software’s id Tech® 5 engine, Wolfenstein sends players across Europe on a personal mission to bring down the Nazi war machine. With the help of a small group of resistance fighters, infiltrate their most heavily guarded facilities, battle high-tech Nazi legions, and take control of super-weapons that have conquered the earth – and beyond. Key Features The Action and Adventure Wolfenstein\'s breath-taking set pieces feature storming a beachfront fortress on the Baltic coast, underwater exploration, player-controlled Nazi war machines, and much more – all combined to create an exhilarating action-adventure experience.', 'FPS / Action / Shooter / Alternate History', '20 May, 2014', 2014, 'MINIMUM: Requires a 64-bit processor and operating system OS: 64-bit Windows 7/Windows 8 Processor: Intel Core i7 or equivalent AMD Memory: 4 GB RAM Graphics: GeForce 460, ATI Radeon HD 6850 Storage: 50 GB available space', 'Pht8Bsq8Cno', ''),
(17, 'GTA V', '49.10', '19.99', 'productsPhotos/GTA_V/GTA_V.png', 'productsPhotos/GTA_V/wallpaper_02.jpg', 'productsPhotos/GTA_V/wallpaper_05.jpg', 'Partner with legendary impresario Tony Prince to open and operate a top shelf Nightclub featuring world-class DJ acts Solomun, Tale Of Us, Dixon and The Black Madonna, and use it as a front for the most concentrated network of criminal enterprise ever to hit San Andreas.  When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other. Grand Theft Auto V for PC offers players the option to explore the award-winning world of Los Santos and Blaine County in resolutions of up to 4k and beyond, as well as the chance to experience the game running at 60 frames per second. ', 'Open World / Action / Multiplayer / Third Person', '14 Apr, 2015', 2015, 'MINIMUM: Requires a 64-bit processor and operating system OS: Windows 10 64 Bit, Windows 8.1 64 Bit, Windows 8 64 Bit, Windows 7 64 Bit Service Pack 1 Processor: Intel Core 2 Quad CPU Q6600 @ 2.40GHz (4 CPUs) / AMD Phenom 9850 Quad-Core Processor (4 CPUs) @ 2.5GHz Memory: 4 GB RAM Graphics: NVIDIA 9800 GT 1GB / AMD HD 4870 1GB (DX 10, 10.1, 11) Storage: 72 GB available space Sound Card: 100% DirectX 10 compatible', 'hBvMSP7cI-Q', ''),
(18, 'Battlefield 1', '46.90', '-1.00', 'productsPhotos/Battlefield_1/Battlefield_1.png', 'productsPhotos/Battlefield_1/wallpaper_03.jpg', 'productsPhotos/Battlefield_1/wallpaper_07.jpg', 'Battlefield: Bad Company 2 brings the award-winning Battlefield gameplay to the forefront of PC gaming with best-in-class vehicular combat and unexpected \"Battlefield moments.\"  New vehicles like the ATV and a transport helicopter allow for all-new multiplayer tactics on the Battlefield. With the Frostbite-enabled Destruction 2.0 system, you can take down entire buildings and create your own fire points by blasting holes through cover. You can also compete in four-player teams in two squad-only game modes, fighting together to unlock exclusive awards and achievements.  Battles are set across expansive maps, each with a different tactical focus. The game also sees the return of the B Company squad in a more mature single-player campaign.', 'FPS / Multiplayer / Action / Shooter / Team-Based', '2 Mar, 2010', 2010, 'MINIMUM: OS: Windows XP Processor: Core 2 Duo @ 2.0GHz Memory: 2GB Graphics: 256 MB Video Card (GeForce 7800 GT / ATI X1900) DirectX®: DirectX 9, 10, and 11 support Hard Drive: 15 GB', 'c7nRTF2SowQ', ''),
(19, 'DOOM', '49.99', '-1.00', 'productsPhotos/DOOM/DOOM.png', 'productsPhotos/DOOM/wallpaper_01.jpg', 'productsPhotos/DOOM/wallpaper_03.jpg', 'Developed by id software, the studio that pioneered the first-person shooter genre and created multiplayer Deathmatch, DOOM returns as a brutally fun and challenging modern-day shooter experience. Relentless demons, impossibly destructive guns, and fast, fluid movement provide the foundation for intense, first-person combat – whether you’re obliterating demon hordes through the depths of Hell in the single-player campaign, or competing against your friends in numerous multiplayer modes. Expand your gameplay experience using DOOM SnapMap game editor to easily create, play, and share your content with the world.  STORY: You’ve come here for a reason. The Union Aerospace Corporation’s massive research facility on Mars is overwhelmed by fierce and powerful demons, and only one person stands between their world and ours. As the lone DOOM Marine, you’ve been activated to do one thing – kill them all. KEY FEATURES: A Relentless Campaign There is no taking cover or stopping to regenerate health as you beat back Hell’s raging demon hordes. Combine your arsenal of futuristic and iconic guns, upgrades, movement and an advanced melee system to knock-down, slash, stomp, crush, and blow apart demons in creative and violent ways. ', 'FPS / Action / Demons / Shooter / Sci-fi', '13 May, 2016', 2016, 'MINIMUM: OS: Windows 7/8.1/10 (64-bit versions) Processor: Intel Core i5-2400/AMD FX-8320 or better Memory: 8 GB RAM Graphics: NVIDIA GTX 670 2GB/AMD Radeon HD 7870 2GB or better Storage: 55 GB available space', '_oVwrpfo_QA', ''),
(20, 'Dishonored 2', '39.99', '0.00', 'productsPhotos/Dishonored_2/Dishonored_2.png', 'productsPhotos/Dishonored_2/wallpaper_01.jpeg', 'productsPhotos/Dishonored_2/wallpaper_05.jpg', 'Reprise your role as a supernatural assassin in Dishonored 2.  Praised by PC Gamer as “brilliant”, IGN as “amazing” and “a super sequel, IGN as “amazing” and “a superb sequel”, declared a “masterpiece” by Eurogamer, and hailed “a must-play revenge tale among the best in its class” by Game Informer, Dishonored 2 is the follow up to Arkane Studio\'s first-person action blockbuster and winner of more than 100 \'Game of the Year\' awards, Dishonored.  Play your way in a world where mysticism and industry collide. Will you choose to play as Empress Emily Kaldwin or the royal protector, Corvo Attano? Will you make your way through the game unseen, make full use of its brutal combat system, or use a blend of both? How will you combine your character\'s unique set of powers, weapons and gadgets to eliminate your enemies? The story responds to your choices, leading to intriguing outcomes, as you play through each of the game\'s hand-crafted missions. Story Dishonored 2 is set 15 years after the Lord Regent has been vanquished and the dreaded Rat Plague has passed into history. An otherworldly usurper has seized Empress Emily Kaldwin’s throne, leaving the fate of the Isles hanging in the balance. ', 'Stealth / Action / First-Person / Assassin / Magic', '11 Nov, 2016', 2016, 'MINIMUM: Requires a 64-bit processor and operating system OS: Windows 7/8/10 (64-bit versions) Processor: Intel Core i5-2400/AMD FX-8320 or better Memory: 8 GB RAM Graphics: NVIDIA GTX 660 2GB/AMD Radeon HD 7970 3GB or better Storage: 60 GB available space', 'l1jyUAtxh-8', ''),
(21, 'Ghost Recon Wildlands', '45.50', '-1.00', 'productsPhotos/Ghost_Recon_Wildlands/profile_03.png', 'productsPhotos/Ghost_Recon_Wildlands/wallpaper_01.png', 'productsPhotos/Ghost_Recon_Wildlands/wallpaper_04.jpg', 'Create a team with up to 3 friends in Tom Clancy’s Ghost Recon® Wildlands and enjoy the ultimate military shooter experience set in a massive, dangerous, and responsive open world. You can also play PVP in 4v4 class-based, tactical fights: Ghost War. TAKE DOWN THE CARTEL In a near future, Bolivia has fallen into the hands of Santa Blanca, a merciless drug cartel who spread injustice and violence. Their objective: to create the biggest Narco-State in history. BECOME A GHOST Create and fully customize your Ghost, weapons, and gear. Enjoy a total freedom of playstyle. Lead your team and take down the cartel, either solo or with up to three friends.', 'Open World / Shooter / Action / Multiplayer / FPS', '7 Mar, 2017', 2017, 'MINIMUM: OS: Windows 7 SP1, Windows 8.1, Windows 10 (64-bit versions only) Processor: Intel Core i5-2400S @ 2.5 GHz or AMD FX-4320 @ 4 GHz or equivalent Memory: 6 GB RAM Graphics: NVIDIA GeForce GTX660 / AMD R9 270X (2GB VRAM with Shader Model 5.0 or better) Storage: 50 GB available space Sound Card: DirectX-compatible using the latest drivers', 'WdJub3Kz2wI', ''),
(22, 'Resident Evil 7', '47.99', '-1.00', 'productsPhotos/Resident_Evil_7/Resident_Evil_7.png', 'productsPhotos/Resident_Evil_7/wallpaper_01.jpg', 'productsPhotos/Resident_Evil_7/wallpaper_07.jpg', 'Resident Evil 7 biohazard is the next major entry in the renowned Resident Evil series and sets a new course for the franchise as it leverages its roots and opens the door to a truly terrifying horror experience. A dramatic new shift for the series to first person view in a photorealistic style powered by Capcom’s new RE Engine, Resident Evil 7 delivers an unprecedented level of immersion that brings the thrilling horror up close and personal. Set in modern day rural America and taking place after the dramatic events of Resident Evil® 6, players experience the terror directly from the first person perspective. Resident Evil 7 embodies the series’ signature gameplay elements of exploration and tense atmosphere that first coined “survival horror” some twenty years ago; meanwhile, a complete refresh of gameplay systems simultaneously propels the survival horror experience to the next level.', 'Horror / Survival / First-Person / Atmospheric', '24 Jan, 2017', 2017, 'MINIMUM: Requires a 64-bit processor and operating system OS: WINDOWS® 7, 8, 8.1, 10 (64-BIT Required) Processor: Intel® Core™ i5-4460, 2.70GHz or AMD FX™-6300 or better Memory: 8 GB RAM Graphics: NVIDIA® GeForce® GTX 760 or AMD Radeon™ R7 260x with 2GB Video RAM DirectX: Version 11 Storage: 24 GB available space Sound Card: D', '9YetHMnhnhM', ''),
(23, 'Fall Out 4', '49.00', '-1.00', 'productsPhotos/Fallout_4/Fallout_4.png', 'productsPhotos/Fallout_4/wallpaper_01.jpeg', 'productsPhotos/Fallout_4/wallpaper_05.jpg', 'Bethesda Game Studios, the award-winning creators of Fallout 3 and The Elder Scrolls V: Skyrim, welcome you to the world of Fallout 4 â€“ their most ambitious game ever, and the next generation of open-world gaming.\r\nAs the sole survivor of Vault 111, you enter a world destroyed by nuclear war. Every second is a fight for survival, and every choice is yours. Only you can rebuild and determine the fate of the Wasteland. Welcome home.\r\nKey Features:\r\nFreedom and Liberty!', 'Open World / Post-apocalyptic / Exploration / RPG', '10 Nov, 2015', 2015, 'MINIMUM:\r\nRequires a 64-bit processor and operating system\r\nOS: Windows 7/8/10 (64-bit OS required)\r\nProcessor: Intel Core i5-2300 2.8 GHz/AMD Phenom II X4 945 3.0 GHz or equivalent\r\nMemory: 8 GB RAM', 'X5aJfebzkrM', ''),
(24, 'The Witcher 3: Wild Hunt', '30.00', '-1.00', 'productsPhotos/The_Witcher_3_Wild_Hunt/The_Witcher_3.png', 'productsPhotos/The_Witcher_3_Wild_Hunt/wallpaper_02.png', 'productsPhotos/The_Witcher_3_Wild_Hunt/wallpaper_04.jpg', 'ABOUT THIS GAME:\r\nThe Witcher: Wild Hunt is a story-driven, next-generation open world role-playing game set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher you play as the professional monster hunter, Geralt of Rivia, tasked with finding a child of prophecy in a vast open world rich with merchant cities, viking pirate islands, dangerous mountain passes, and forgotten caverns to explore.\r\nPLAY AS A HIGHLY TRAINED MONSTER SLAYER FOR HIRE\r\nTrained from early childhood and mutated to gain superhuman skills, strength and reflexes, witchers are a distrusted counterbalance to the monster-infested world in which they live.\r\n', 'Open World / RPG / Story Rich / Atmospheric', '18 May, 2015', 2015, 'MINIMUM:\r\nOS: 64-bit Windows 7, 64-bit Windows 8 (8.1) or 64-bit Windows 10\r\nProcessor: Intel CPU Core i5-2500K 3.3GHz / AMD CPU Phenom II X4 940\r\nMemory: 6 GB RAM\r\nGraphics: Nvidia GPU GeForce GTX 660 / AMD GPU Radeon HD 7870\r\nStorage: 35 GB available space', 'FcogCjLymeI', ''),
(25, 'Need for Speed', '29.00', '-1.00', 'productsPhotos/Need_For_Speed/profile_01.png', 'productsPhotos/Need_For_Speed/wallpaper_01.jpg', 'productsPhotos/Need_For_Speed/wallpaper_02.jpg', 'Need for Speed Hot Pursuit launches you into a new open-world landscape behind the wheel of the world\'s fastest and most beautiful cars. From Criterion, the award-winning studio behind the Burnout series, Hot Pursuit will redefine racing games for a whole new generation.\r\nYou\'ll experience stunning speeds, takedowns, and getaways as you battle your friends in the most connected Need for Speed game ever. Through Need for Speed Autolog and its innovative approach to connected social competition, your Hot Pursuit experience will extend beyond the console onto the web, constantly moving your gameplay in new and unique directions.\r\n', 'Racing, Multiplayer, Open World, Driving', '13 Nov, 2015', 2015, 'MINIMUM:\r\nOS: Windows XP SP3, Windows XP 64-bit SP2, Windows Vista SP2 (32- or 64-bit), or Windows 7 (32- or 64-bit). (Not Supported - Windows 95, Windows 98, Windows ME, Windows NT 4.0, and Windows 2000 are not supported.)\r\nProcessor: Intel CoreÂ® 2 Duo 2.0 GHZ or AMD Athlon X2 64 2.4GHZ; 1.5 GB WindowsÂ® XP / 2 GB Windows VistaÂ® - Windows 7Â®\r\nMemory: 1GB (XP), 1.5GB (Vista), 1.5 GB (Windows 7)\r\nHard Disk Space: 8 GB free hard disk space. Additional space required for DirectX 9.0c installation and for saved games\r\nVideo Card: DirectXÂ® 9.0c Compatible 3D-accelerated 256 MB video card with Shader Model 3.0* or higher\r\nSound Card: DirectX 9.0c Compatible Sound Card\r\nDVD-ROM: 8X speed DVD-ROM drive (Disc Users only)\r\nOnline Gameplay: Broadband connection for online activation and online gameplay - 512 Kbps or faster\r\nDirect XÂ®: DirectX 9.0c', 'LdbwrRE8YFs', '');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_type` varchar(32) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`user_id`, `user_type`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'admin', 'Melisa', 'Zanier', 'melisa_zanier@yahoo.com', 'melisa_zanier', '$2y$10$w48lTmBWDFQW1.0gnzaNbecnYzX3BZ8AbZZsOpZeHPUIADcY.mS3K'),
(2, 'admin', 'Andrei', 'Voia', 'ciocolata@yahoo.ro', 'andrei', '$2y$10$EpTN4KBp2nT27dsZ9CnizeEKRPUfuE.t7VLupIfgBMh.0F60nPKPW'),
(3, 'user', 'maria', 'ana', 'ana.a@gmail.com', 'ana', '$2y$10$qQNKE9mVVQ160YonDUJyqeGvsXB/zSpYMvZzKTU9auxj63vZsmISK'),
(4, 'user', 'gigel', 'gigel', 'gigel@yahoo.com', 'gigel', '$2y$10$tGDyBlOF3dwtnfJCHI8QpOfEvDd5KC0VsLxkSKF29KnwMDD9xk3uq'),
(5, 'user', 'alij', 'anila', 'alin@yahoo.com', 'alin', '$2y$10$pRGIPURLsCZ7Atnmj7B9XO2pnexBt.DIIlhQr.u8JKpBN81v3XVK2');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users_orders`
--

CREATE TABLE `users_orders` (
  `order_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `order_code` varchar(20) NOT NULL,
  `order_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `users_orders`
--

INSERT INTO `users_orders` (`order_id`, `order_product_id`, `order_code`, `order_id_user`) VALUES
(1, 7, '216706148', 3),
(2, 12, '900395889', 3),
(3, 2, '570593216', 3),
(4, 5, '523232268', 3),
(5, 25, '125241913', 4),
(6, 15, '577790172', 4),
(7, 17, '487507799', 4),
(8, 20, '982008174', 4);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexuri pentru tabele `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexuri pentru tabele `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pentru tabele `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
