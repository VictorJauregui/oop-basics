`#php` `#oop` `#master-in-software-engineering`

# Assembler School: OOP Basics with PHP <!-- omit in toc -->

Project containing basics of OOP using different examples as a reference. In the _"theory%26info"_ section you will find a description of the content to be displayed in each file.

## Table of contents

- [Table of contents](#table-of-contents)
- [Tools](#tools)
- [OOP Introduction](#oop-introduction)
- [Project files](#project-files)



## Tools

-[XAMPP](https://www.apachefriends.org/es/download.html): Run a PHP server (Apache)
-[PHP](https://www.php.net/): Programming Language used

## OOP Introduction

Object-oriented programming (OOP) is a programming paradigm based on the concept of "objects", which can contain data and code: data in the form of fields (often known as attributes or properties), and code, in the form of procedures (often known as methods).

## Project files

### [01 - Classes](/theory%26info/01-classes.php) <!-- omit in toc -->

The OOP paradigm encapsulates concepts of the real world in what is called as Classes which create Objects. In this file you will learn how to create a class and instanciate it.

### [02 - Properties](/theory%26info/02-properties.php) <!-- omit in toc -->

Class member variables are called properties. In this file, you will learn how to add properties to a class and get them when the class is instantiated.

### [03 - Methods](/theory%26info/03-methods.php) <!-- omit in toc -->

Properties define the characteristics of an object and the methods (functions in a class are called methods) which define the behavior of the Class. In this file you will learn how to create methods inside a class.

### [04 - Getters](/theory%26info/04-getters.php) <!-- omit in toc -->

The get method returns the attribute value, usually there is a get method for each attribute of the class. In this file you will learn how to create **getter** methods.

### [05 - Setters](/theory%26info/05-setters.php) <!-- omit in toc -->

The set method sets the attribute value, usually there is a get method for each attribute of the class. In this file you will learn how to create **setter** methods.

### [06 - Constructors](/theory%26info/06-constructors.php) <!-- omit in toc -->

A constructor allows you to initialize an object's properties upon creation of the object. In this file you will learn how to create the constructor method.

### [07 - Inheritance problem](/theory%26info/07-inheritance-problem.php) <!-- omit in toc -->

There are several disadvantages of not applying inheritance in our code. In this file you will lean what's the problem if you don't apply any inheritance in your code.

### [08 - Inheritance soluction](/theory%26info/08-inheritance-solution.php) <!-- omit in toc -->

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods. In this file you will learn how to apply the inheritance in your code.

### [09 - Public, private & protected](/theory%26info/09-public-private-protected.php) <!-- omit in toc -->

Properties and methods can have access modifiers which control where they can be accessed. In this file you will learn le three access modifiers.

### [10 - Static](/theory%26info/10-static.php) <!-- omit in toc -->

Static properties and methods can be called directly - without creating an instance of the class first. In this file you will learn how to use static properties and methods.

### [11 - Const](/theory%26info/11-const.php) <!-- omit in toc -->

Constants cannot be changed once it is declared. Class constants can be useful if you need to define some constant data within a class. In this file you will learn how to create constants within a class.

### [12 - Abstract classes](/theory%26info/12-abstract-classes.php) <!-- omit in toc -->

Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks. In this file you will learn how to create and use abstract classes.

### [13 - Interfaces](/theory%26info/13-interfaces.php) <!-- omit in toc -->

Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism". In this file you will learn how to create and extend interfaces.

### [14 - Overriding](/theory%26info/14-overriding.php) <!-- omit in toc -->

In function overriding, both parent and child classes should have same function name with and number of arguments. In this file you will learn how to implement overriding.

### [15 - Overloading](/theory%26info/15-overloading.php) <!-- omit in toc -->

Function overloading contains same function name and that function preforms different task according to number of arguments. In this file you will learn how to implement overloading.

### [16 - Namespaces](/theory%26info/16-namespaces.php) <!-- omit in toc -->

Namespaces are qualifiers that solve two different problems:

1. They allow for better organization by grouping classes that work together to perform a task
2. They allow the same name to be used for more than one class

In this file you will learn how to create and use namespaces.

## Abstract
Abstract class with it's properties and methods.
### [Index](/index.php) <!-- omit in toc -->
### [product](/product.php) <!-- omit in toc -->

## Phone class
Base class with all it's requirements.
### [Phone](/phone.php) <!-- omit in toc -->

## Class Interface
Implemented interface by class with it's methods.
### [MovilOn](movilOn.php) <!-- omit in toc -->

## Phone example
Phone example implementing php oop basics and topics.
### [Phone example](iphone.php) <!-- omit in toc -->

## Read Me Index
READ ME index containing repository index and explanation.
### [Read Me](README.md) <!-- omit in toc -->