# TomatoStalker
Stalk your tomatoes

## Overview

This project uses a Wi-Fi enabled microcontroller to keep tabs on soil moisture, temperature and humidity and display that data in a simlle web interface. The MCU I chose is a [Particle Photon](https://docs.particle.io/photon/) with 5 soil moisture sensors, a temperature and humidity sensor, a small battery pack and a small solar panel for charging.

## Code

There are 2 main software parts to this project, code that runs on the Photon and code that runs on the server. The code that runs on the Photon, named tomatoStalker.ino, looks just like any other Arduino sketch and is written in C/C++. The web interface is built with HTML5 SVG and Canvas elements, animated with CSS3, and stores data values pulled at regular intervals from the Photon with local storage. [Chart.js](https://www.chartjs.org/) is the main library used for displaying data while [Bootstrap](https://getbootstrap.com/) is used to help keep the interface flexible and responsive.

## Graphics

The intro animation and each of the leaves inside the donut charts are SVG paths made in Illustrator and imported as HTML elements. The tomato plant was animated purely with CSS3 and the leaves in the middle of the donut chart change color depending on soil moisture levels.
![Animated intro](/img/animated-intro.gif)

## Hardware

Centered around the Particle Photon, Tomato Stalker uses a [SparkFun Photon Battery Shield](https://www.sparkfun.com/products/13626) and [Lithium Ion Battery](https://www.sparkfun.com/products/13854) to keep itself running without needing to be plugged in. If you're in an area with sufficient sunshine it can also be paired with a [Solar Panel](https://www.sparkfun.com/products/18725) to keep itself charged. To make solar charging more efficient I also added a few photoells and a servo for solar tracking. An [Adafruit Si7021](https://www.adafruit.com/product/3251) gathers and transmits temperature and humidity information to the Photon using I2C. Finally, an array of 5 [SparkFun Soil Moisture Sensors](https://www.sparkfun.com/products/13322) give analog readings of soil moisture.
