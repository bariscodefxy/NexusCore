# PHPCraft
###### An open-source Minecraft server implementation, written in PHP.

## What is PHPCraft?

PHPCraft is an open-source Minecraft server implementation, written in PHP.

That being said, PHPCraft is not intended to ever become a fully-functional, production-ready Minecraft server. Rather, it is just a for-fun project that I became interested in one day.

PHPCraft is a fork of [Andrew Vy](https://github.com/andrewvy)'s [HHVMCraft](https://github.com/andrewvy/HHVMCraft) project.

**※ Note:** While HHVMCraft _did_ (as the name would suggest) support HHVM, PHPCraft does not.

---

## Which Minecraft versions are supported?

PHPCraft currently targets and supports Minecraft Beta b1.7.3 ([Beta/pre-Netty Protocol 14](https://wiki.vg/Protocol_version_numbers#Beta)), but you can connect to it with modern Minecraft versions (like 1.17.1!) using [DirtMultiVersion](https://github.com/DirtPowered/DirtMultiversion).

(I _would_ like to target/support a more modern Minecraft version at some point, but that would pretty much mean rewriting just about _all_ of the code from scratch and would be a _lot_ of work for what is again, just a project I'm doing for fun because I found it interesting.)

**※ Note:** Bedrock Edition clients (using [Geyser](https://github.com/GeyserMC/Geyser)) do not work correctly yet with PHPCraft for some reason (all blocks are invisible), despite the fact that Geyser _does_ work just fine with DirtMultiVersion when connected to other servers.

---

## Screenshots

![A screenshot of Minecraft 1.17.1 connected to a PHPCraft server, showing a small house that was built from wood planks, a small pond, a tree, and various rose and dandelion flowers scattered about.](screenshots/Minecraft%201.17.1%20-%2001%20Day.png)
<p align="center">A Minecraft 1.17.1 client connected to a PHPCraft server via <a href="https://github.com/DirtPowered/DirtMultiversion" target="_blank">DirtMultiVersion</a> (and <a href="https://github.com/ViaVersion/ViaVersion" target="_blank">ViaVersion</a>). A Minecraft Beta b1.7.3 client was also connected to the PHPCraft server at the same time, viewing the same world.<br><br><em>(There are no doors or beds because those blocks do not work correctly yet in PHPCraft.)</em></p>

![A screenshot of Minecraft 1.17.1 connected to a PHPCraft server, showing the interior of a small house that was built from wood planks. It is later in the day, and the sunlight is filtering through the glass roof. There are two furnaces, some bookshelves, a crafting table, a music player, a chair (actually an oak stair block), and a single stone slab intended to represent a desk.](screenshots/Minecraft%201.17.1%20-%2006%20Morning%20(Interior).png)
<p align="center">The same Minecraft 1.17.1 client connected to the same PHPCraft server, but at a later time of day.</p>

More screenshots can be found in the [screenshots folder](screenshots/) that include other times of day, as well as the Minecraft Beta b1.7.3 client that was also connected to the same PHPCraft server at the time.

---

## How do I run PHPCraft?

### Prerequisites
* PHP 8.x (recommended) or PHP 7.4 to 7.2
	* `brew install php` on macOS (requires [Homebrew](https://brew.sh/) to be installed)
	* `sudo apt install php` on Debian-based Linux distributions
	* [PHP for Windows](https://windows.php.net/download)
		* The "Non Thread Safe" version is sufficient for our purposes, as PHPCraft only uses PHP on the CLI, and not as part of a web server.
* Composer
	* `brew install composer` on macOS (requires [Homebrew](https://brew.sh/) to be installed)
	* Follow [these instructions](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) on Linux
	* Use [the Composer installer](https://getcomposer.org/Composer-Setup.exe) on Windows

### Running PHPCraft
```shell
git clone https://github.com/akemin-dayo/PHPCraft.git
cd PHPCraft
composer install
php start.php # ./start.php also works
```

You can configure both the server port (`25565` by default) and the IP address to bind to (`0.0.0.0` by default) in `start.php`!

---

## Useful developer resources
* [Protocol specification for Minecraft Beta b1.7.3 (Beta/pre-Netty Protocol 14) on wiki.vg (oldid 510)](https://wiki.vg/index.php?title=Protocol&oldid=510)
	* This is the last page revision pertaining to Beta/pre-Netty Protocol 14, made on 2011/08/14.

---

## License

Licensed under the [MIT License](https://opensource.org/licenses/MIT).
