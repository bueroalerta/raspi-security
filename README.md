# RasPi Security

## Screenshot

![Screenshot](https://raw.githubusercontent.com/jwage/raspi-security/master/docs/screenshot.png?token=AAF8jhwtbHrCgYxAtvAd0eMCx4-PQXacks5W3HoLwA%3D%3D)

## Configuration

Configure RasPi Security by copying `config/local.yml.dist` to `config/local.yml` and customizing:

Here is an example `local.yml` for my home security system:

	parameters:
	    title: WageNet Security

	    auth_users:
	        -
	            username: jwage
	            password: password

	    motion_path: /mnt/motion

	    pis:
	        -
	            name: pi02
	            host: pi02.home.jwage.com
	        -
	            name: pi03
	            host: pi03.home.jwage.com
	        -
	            name: pi04
	            host: pi04.home.jwage.com
	        -
	            name: pi05
	            host: pi05.home.jwage.com

You will need a NFS server running that is mounted on each Raspberry Pi node at `/mnt/motion`. The `/etc/motion/motion.conf` file is configured to write images, videos, timelapses, etc. to that path. The server that runs this software also needs that same NFS mount at `/mnt/motion` in order to render a UI for browsing the images and videos each Raspberry Pi node outputs.

Here is the relevant section of the `/etc/motion/motion.conf` file that was modified to work with this software:

	# Target base directory for pictures and films
	# Recommended to use absolute path. (Default: current working directory)
	target_dir /mnt/motion-images/pi01

	# File path for snapshots (jpeg or ppm) relative to target_dir
	# Default: %v-%Y%m%d%H%M%S-snapshot
	# Default value is equivalent to legacy oldlayout option
	# For Motion 3.0 compatible mode choose: %Y/%m/%d/%H/%M/%S-snapshot
	# File extension .jpg or .ppm is automatically added so do not include this.
	# Note: A symbolic link called lastsnap.jpg created in the target_dir will always
	# point to the latest snapshot, unless snapshot_filename is exactly 'lastsnap'
	snapshot_filename lastsnap

	# File path for motion triggered images (jpeg or ppm) relative to target_dir
	# Default: %v-%Y%m%d%H%M%S-%q
	# Default value is equivalent to legacy oldlayout option
	# For Motion 3.0 compatible mode choose: %Y/%m/%d/%H/%M/%S-%q
	# File extension .jpg or .ppm is automatically added so do not include this
	# Set to 'preview' together with best-preview feature enables special naming
	# convention for preview shots. See motion guide for details
	jpeg_filename images/%v-%Y%m%d%H%M%S-%q

	# File path for motion triggered ffmpeg films (mpeg) relative to target_dir
	# Default: %v-%Y%m%d%H%M%S
	# Default value is equivalent to legacy oldlayout option
	# For Motion 3.0 compatible mode choose: %Y/%m/%d/%H%M%S
	# File extension .mpg or .avi is automatically added so do not include this
	# This option was previously called ffmpeg_filename
	movie_filename movies/%v-%Y%m%d%H%M%S

	# File path for timelapse mpegs relative to target_dir
	# Default: %Y%m%d-timelapse
	# Default value is near equivalent to legacy oldlayout option
	# For Motion 3.0 compatible mode choose: %Y/%m/%d-timelapse
	# File extension .mpg is automatically added so do not include this
	timelapse_filename timelapse/%Y%m%d-timelapse

## Raspberry Pi Camera Nodes

I bought all the parts for each Raspberry Pi node on Amazon. Here are some of the links:

- http://www.amazon.com/gp/product/B00EYIPKLS - You can retrofit a speaker mount to mount a camera indoors.
- http://www.amazon.com/gp/product/B00E1GGE40 - Camera module
- http://www.amazon.com/gp/product/B00G76YEU8 - IR Camera module
- http://www.amazon.com/gp/product/B00WH1N8RM - Raspberry Pi starter kit
- http://www.amazon.com/gp/product/B00M3NHCC6 - LED infrared illuminator
