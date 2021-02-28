<?php

/**
 * @author Nika Kudukhashvili <nikakuduxashvili0@gmail.com>
 * @package Framework\Firewall
*/

namespace App\Modules;

class Denylist {
	public static $tor = [
		'176.10.99.200','54.37.16.241','46.182.106.190','109.70.100.40','51.15.43.205','51.75.64.23','94.32.66.48','82.221.128.191','109.70.100.43','185.220.100.254','51.89.23.74','192.42.116.19','97.74.237.196','185.220.103.9','172.105.35.249','144.217.60.239','195.176.3.23','199.249.230.117','185.220.100.243','185.220.100.245','198.58.107.53','104.196.43.128','199.249.230.83','185.129.62.62','199.249.230.75','185.220.101.11','104.244.76.13','185.220.101.13','66.70.228.168','185.220.101.130','23.129.64.191','23.129.64.207','71.19.144.106','95.143.193.125','80.127.116.96','51.38.64.136','185.220.100.241','124.109.1.207','109.70.100.34','185.220.101.199','178.20.55.18','178.17.170.112','130.204.161.3','45.125.65.45','142.44.246.156','185.220.101.205','195.176.3.20','49.50.107.221','199.249.230.121','109.70.100.35','89.34.27.149','91.250.242.12','185.82.219.109','46.182.21.248','82.118.21.59','41.215.242.42','185.220.103.4','51.79.86.181','205.185.117.149','192.160.102.164','199.249.230.89','45.15.16.72','45.15.16.85','45.15.16.100','51.79.86.177','80.79.23.7','149.56.44.47','212.21.66.6','207.244.70.35','217.79.178.53','51.79.53.146','185.220.100.242','185.220.101.9','109.201.133.100','103.253.41.111','144.172.71.182','217.170.204.126','204.11.50.131','171.25.193.77','51.15.80.14','185.220.102.8','91.92.109.43','199.249.230.84','109.70.100.33','185.220.101.137','185.220.100.246','185.220.101.136','23.129.64.212','213.95.149.22','185.220.101.131','77.247.181.163','179.43.146.230','185.220.101.10','162.247.74.7','109.169.33.163','185.100.87.207','81.16.33.31','51.79.53.139','82.221.131.5','23.129.64.181','185.220.101.143','185.220.101.12','46.59.65.88','95.211.230.211','185.220.101.19','199.249.230.103','95.216.107.148','192.42.116.27','23.129.64.192','46.232.251.191','176.58.100.98','104.244.76.69','51.79.86.175','199.249.230.65','94.16.121.91','216.218.134.12','104.244.78.231','199.249.230.118','195.254.135.76','185.220.102.7','51.254.48.93','185.220.101.5','109.70.100.37','185.165.168.229','51.79.86.174','162.247.72.199','193.169.145.202','80.67.172.162','185.220.101.215','158.69.63.54','109.70.100.38','87.118.116.229','185.220.100.255','198.251.83.248','185.220.101.21','27.122.59.100','185.165.168.77','158.69.201.47','23.129.64.208','185.220.101.14','178.17.171.102','85.93.218.204','43.251.159.144','46.232.249.138','185.220.101.7','178.17.171.197','23.129.64.186','209.141.61.129','178.17.174.10','66.230.230.230','199.249.230.85','199.249.230.101','81.16.33.33','172.98.193.43','5.2.77.146','77.247.181.162','23.129.64.206','109.70.100.42','46.38.235.14','185.220.100.247','5.79.109.48','193.169.145.194','199.249.230.107','185.220.101.2','62.102.148.68','162.247.74.27','204.27.60.147','162.247.74.204','202.165.228.225','162.213.3.221','23.129.64.183','200.38.232.248','199.195.251.84','83.96.213.63','23.129.64.209','178.175.131.194','160.202.162.186','176.10.104.240','179.48.251.188','185.10.16.41','41.215.241.146','87.120.37.79','80.241.60.207','178.17.174.232','94.230.208.147','217.12.223.225','185.220.101.20','185.220.101.6','103.234.220.195','5.2.72.101','139.99.98.191','109.69.67.17','46.29.248.238','185.220.100.253','185.220.100.248','185.220.101.18','167.88.7.134','199.249.230.115','199.249.230.71','199.249.230.77','66.146.193.33','46.165.230.5','185.220.101.129','185.220.101.3','185.220.103.6','149.202.238.204','103.253.41.98','192.42.116.18','109.70.100.46','65.181.123.254','185.220.100.251','45.129.56.200','45.128.133.242','192.42.116.23','51.158.111.157','185.220.101.4','185.220.101.138','178.17.170.164','139.162.10.72','185.220.101.144','107.189.10.42','192.42.116.17','185.220.100.244','185.100.85.101','193.169.145.66','192.160.102.170','167.86.94.107','202.165.228.161','45.66.35.35','23.129.64.217','185.220.103.8','103.28.53.138','162.247.74.202','46.166.139.111','51.79.53.145','185.222.202.12','176.53.90.26','185.220.101.216','199.249.230.114','62.210.37.82','103.236.201.110','162.247.74.201','109.70.100.41','209.95.51.11','185.222.202.133','192.160.102.165','138.59.18.110','199.249.230.74','199.249.230.76','5.2.72.110','82.223.14.245','109.70.100.39','185.220.101.134','178.17.170.91','185.220.102.4','178.17.171.39','103.236.201.88','50.116.37.141','176.10.107.180','195.176.3.19','199.249.230.68','185.220.102.6','89.34.27.43','176.123.7.145','104.244.74.47','199.249.230.81','87.118.116.90','89.163.143.8','91.244.181.85','193.32.126.161','87.118.122.30','216.239.90.19','209.141.41.103','199.249.230.109','96.66.15.147','67.163.129.15','199.249.230.79','18.18.248.17','142.44.139.12','188.213.49.176','89.234.157.254','195.154.179.3','195.206.105.217','192.195.80.10','54.36.108.162','87.118.116.103','162.247.74.213','212.83.166.62','144.217.80.80','23.129.64.184','91.240.84.192','45.114.130.4','62.171.144.155','109.70.100.32','62.102.148.69','51.178.52.245','204.85.191.8','45.64.186.122','45.64.186.102','87.118.96.154','162.247.74.74','192.160.102.166','199.249.230.82','23.239.22.248','139.99.172.11','185.65.134.175','162.247.74.217','185.220.101.200','23.129.64.189','23.129.64.197','37.48.120.196','185.65.205.10','95.154.24.73','87.118.122.51','51.79.86.173','23.129.64.205','145.239.91.37','95.142.161.63','46.246.35.94','46.246.35.203','46.246.39.134','46.246.39.173','46.246.39.210','46.246.38.195','46.246.39.158','46.246.36.26','46.246.39.231','46.246.40.212','94.142.244.16','23.129.64.182','23.129.64.215','31.31.72.24','185.165.168.168','185.220.101.17','198.251.83.193','198.96.155.3','185.130.44.108','199.249.230.119','18.27.197.252','82.221.131.71','89.34.27.59','212.47.229.4','178.17.170.135','159.89.174.9','185.220.100.250','94.102.51.78','45.76.115.159','94.230.208.148','77.81.247.72','89.31.57.5','199.249.230.122','157.245.184.13','185.213.155.169','85.248.227.164','199.249.230.70','210.140.10.35','185.242.113.224','195.123.225.112','109.70.100.36','62.210.105.116','162.247.74.216','185.67.82.114','185.216.32.130','104.244.74.57','185.220.101.142','185.100.87.41','95.211.118.194','103.208.220.122','192.42.116.13','188.214.104.146','162.247.74.200','162.247.73.192','195.254.134.194','51.15.235.211','185.220.100.240','5.2.79.179','109.70.100.44','36.227.160.244','59.115.118.78','59.115.127.208','59.115.112.9','59.115.117.226','59.115.121.197','61.230.163.73','46.167.244.56','176.107.187.151','51.79.53.134','185.220.100.249','191.34.125.42','177.18.192.205','177.133.183.182','177.157.155.186','179.178.72.161','177.97.248.42','177.18.194.150','179.186.121.43','177.157.253.143','177.205.154.237','177.205.24.208','177.205.20.200','191.250.136.157','177.97.253.175','186.214.79.205','177.18.198.168','191.250.140.114','128.199.213.157','208.68.4.129','139.162.7.42','23.129.64.196','185.56.171.94','103.234.220.197','192.160.102.169','173.212.231.228','164.132.9.199','192.42.116.26','23.129.64.210','23.129.64.193','37.228.129.2','185.42.170.203','185.100.86.154','192.42.116.22','163.172.41.228','46.165.245.154','130.149.80.199','176.123.6.10','185.100.87.206','104.244.78.233','217.12.223.227','185.100.86.128','199.249.230.123','199.249.230.120','178.17.170.88','89.34.27.48','199.249.230.106','199.249.230.108','192.42.116.24','198.50.128.237','162.247.74.206','51.255.45.144','84.209.139.0','209.141.50.178','199.249.230.104','192.42.116.20','123.30.128.138','185.220.103.7','173.244.209.5','23.129.64.216','51.75.144.43','185.220.100.252','37.139.8.104','104.244.72.99','143.202.161.75','104.244.74.97','199.249.230.102','185.100.85.61','195.206.107.147','178.17.174.198','5.2.72.113','23.129.64.204','38.68.37.77','192.42.116.14','199.249.230.64','51.161.43.235','103.208.220.226','23.129.64.202','180.150.226.99','95.128.43.164','85.248.227.165','189.84.21.44','144.217.60.211','109.70.100.31','199.249.230.100','51.79.86.180','45.140.170.187','109.70.100.45','185.222.202.104','198.50.158.140','103.75.190.11','23.129.64.187','144.217.7.33','93.115.241.194','89.34.27.49','192.42.116.16','23.129.64.201','104.244.77.199','181.119.30.26','195.176.3.24','178.17.174.14','190.216.2.136','94.32.66.15','178.17.174.68','87.118.116.12','178.17.174.196','192.42.116.15','199.249.230.80','51.38.233.93','23.129.64.211','171.25.193.20','209.141.54.195','192.160.102.168','91.203.145.116','23.129.64.188','185.100.86.182','195.123.246.77','199.249.230.113','89.236.112.100','51.77.39.255','185.220.103.5','79.137.79.167','23.129.64.203','213.61.215.54','192.42.116.28','41.77.137.114','178.175.148.224','199.249.230.105','23.129.64.194','91.146.121.3','178.20.55.16','151.237.185.110','166.70.207.2','185.220.101.213','45.79.73.22','192.42.116.25','23.129.64.180','185.220.101.141','180.149.125.139','185.220.101.148','82.221.141.96','217.12.221.131','137.74.169.241','178.17.174.211','193.218.118.140','185.65.206.154','190.164.230.9','125.212.241.131','178.17.170.23','103.28.52.93','95.216.145.1','41.77.136.114','204.85.191.9','164.77.133.220','23.129.64.185','46.194.175.221','46.194.36.40','46.194.3.251','46.194.191.175','178.30.49.3','178.30.24.83','178.30.48.13','46.194.177.141','46.194.34.244','46.194.176.140','50.254.218.37','185.35.202.222','185.113.128.30','71.174.105.126','104.244.72.115','62.109.10.150','83.135.200.82','83.135.197.242','87.123.42.195','89.245.80.23','87.123.36.127','89.245.80.0','83.135.205.30','83.135.199.128','87.123.33.251','89.245.86.23','83.135.194.2','89.245.89.109','87.123.65.175','89.245.84.250','89.245.93.132','83.135.194.12','89.246.116.46','89.245.91.99','83.135.203.4','87.123.37.183','87.123.41.222','89.245.84.37','87.123.37.86','89.245.86.162','87.123.77.218','87.123.79.41','87.123.75.21','83.135.194.114','83.135.202.253','87.123.72.92','87.123.76.61','87.123.37.82','89.245.90.30','83.135.201.185','87.123.67.161','87.123.67.1','83.135.199.229','89.245.86.56','83.135.197.116','83.135.196.10','83.135.199.170','87.123.69.193','87.123.73.4','89.245.88.173','89.245.93.249','83.135.195.216','89.245.95.216','109.250.154.210','83.135.200.106','87.123.69.82','87.123.66.131','83.135.207.60','83.135.196.227','89.245.94.28','87.123.47.75','87.123.33.127','87.123.40.210','89.246.116.113','87.123.44.182','87.123.46.73','89.245.87.252','87.123.33.214','87.123.42.107','87.123.44.197','87.123.44.245','89.245.80.30','89.245.95.44','87.123.66.191','89.245.85.247','87.123.37.30','83.135.207.99','87.123.42.130','87.123.32.69','87.123.73.49','89.245.92.110','89.245.95.76','89.245.94.210','83.135.205.3','83.135.206.146','87.123.74.172','89.245.90.43','87.123.44.128','87.123.36.136','87.123.72.5','109.250.159.53','83.135.203.226','87.123.66.154','89.245.80.165','89.245.83.181','87.123.70.124','87.123.43.195','87.123.76.204','87.123.77.227','87.123.68.172','89.245.95.30','87.123.42.47','87.123.42.244','87.123.79.106','83.135.199.255','89.246.116.115','109.250.152.227','83.135.206.41','87.123.47.180','83.135.194.233','89.245.89.91','87.123.65.236','83.135.198.165','89.245.89.114','87.123.65.10','87.123.71.68','87.123.34.16','83.135.203.184','193.218.118.160','107.189.10.93','109.70.100.47','109.70.100.48','176.123.5.250','217.170.206.138','217.170.206.146','217.170.205.14','199.195.250.77','85.248.227.163','77.247.181.165','104.244.73.126','5.2.188.23','185.220.101.132','185.220.101.196','87.120.254.105','185.220.101.214','66.175.208.248','185.220.101.195','185.220.101.203','104.200.20.46','185.220.101.207','185.220.101.147','185.220.101.139','185.220.101.212','185.220.101.204','185.220.101.206','185.220.101.198','195.80.151.30','185.220.101.140','185.220.101.145','185.220.101.197','45.79.157.103','185.100.87.242','185.100.87.243','185.100.87.244','185.100.87.240','185.100.87.241','104.244.73.193','178.17.170.13','185.100.87.251','185.12.45.116','185.12.45.114','185.12.45.115','185.12.45.118','185.12.45.117','46.19.141.82','46.19.141.85','46.19.141.84','46.19.141.86','46.19.141.83','81.17.16.147','81.17.16.150','81.17.16.149','81.17.16.148','81.17.16.146','82.221.139.190','69.4.234.81','185.170.114.25','208.68.7.129','158.69.35.227','185.117.215.9','179.43.167.227','179.43.167.230','185.146.157.196','103.35.74.74','179.43.167.229','179.43.167.228','92.63.104.84','179.43.167.226','46.167.244.59','176.123.3.222','78.131.70.167','94.21.32.112','84.236.122.142','84.236.1.181','212.40.95.232','94.21.155.191','62.165.210.76','62.109.20.253','139.99.120.130','87.120.254.98','51.195.136.190','103.228.53.155','188.120.235.117','178.165.72.177','198.251.89.80','139.99.133.150','212.109.197.1','131.255.4.96','185.220.101.209','185.220.101.149','185.220.101.202','185.220.101.135','185.220.101.8','185.220.101.16','185.220.101.193','185.220.101.194','185.220.101.208','195.37.209.9','82.146.38.181','172.98.193.62','185.220.101.210','185.220.101.201','91.132.147.168','205.185.125.216','62.109.0.2','23.129.64.100','23.129.64.190','23.129.64.195','23.129.64.213','23.129.64.200','185.10.68.254','5.199.130.188','185.10.68.22','134.249.106.21','178.17.171.78','185.38.175.71','145.239.91.163','187.121.88.135','179.93.59.169','187.116.124.169','177.76.224.208','187.121.120.244','187.121.106.121','187.121.119.129','187.121.83.90','189.18.180.171','187.121.101.235','187.121.96.137','152.249.74.160','187.121.99.201','187.121.89.196','187.121.84.220','187.121.123.200','177.170.170.160','187.74.129.190','187.116.124.61','177.170.88.219','187.121.104.139','187.10.72.128','177.102.164.54','179.93.57.222','187.121.114.140','187.121.111.221','187.121.1.182','177.76.190.228','187.74.130.124','187.121.90.59','187.121.102.218','187.121.109.92','187.121.119.221','187.121.101.224','177.76.161.239','187.121.93.160','187.121.93.202','187.121.120.201','187.75.67.25','187.121.0.45','179.93.147.22','187.116.124.253','187.75.65.246','177.102.165.196','187.74.132.201','187.121.92.103','187.75.67.59','187.121.114.216','187.121.115.186','187.121.108.30','187.121.83.228','187.121.1.135','177.76.191.247','177.76.224.179','187.121.86.218','187.121.121.154','187.10.72.201','187.10.72.50','187.121.1.28','187.121.103.13','189.78.246.83','187.121.91.99','189.78.246.106','187.74.132.139','187.121.122.183','189.78.247.136','187.121.109.251','187.121.92.197','201.95.72.61','179.93.59.141','177.76.161.59','187.121.94.109','201.95.72.228','179.93.146.186','179.93.60.52','187.74.132.25','187.121.1.176','187.121.122.8','189.18.180.111','187.74.132.130','187.74.133.19','187.121.0.139','187.121.114.250','187.121.73.56','201.42.113.73','187.10.133.100','177.170.251.79','187.121.88.117','187.121.104.78','187.121.104.40','201.95.72.49','187.74.132.75','187.121.93.127','177.170.254.17','177.76.224.194','201.95.72.251','201.95.72.139','177.76.223.233','187.121.1.42','177.76.190.227','187.121.78.146','187.121.73.64','187.121.80.98','187.121.121.224','187.10.135.26','187.74.133.158','201.93.243.200','177.170.88.146','187.121.96.203','187.74.132.229','187.74.132.91','187.121.75.116','189.18.179.196','187.121.106.50','201.42.114.190','187.74.130.211','187.121.105.5','187.121.115.165','187.121.109.143','176.58.89.182','217.119.151.164','217.119.157.21','209.141.53.10','195.144.21.219','176.123.5.227','94.140.114.190','199.249.230.140','199.249.230.142','199.249.230.141','199.249.230.144','199.249.230.143','199.249.230.148','178.17.170.178','199.249.230.146','199.249.230.149','199.249.230.145','199.249.230.147','199.249.230.152','199.249.230.151','199.249.230.169','199.249.230.166','199.249.230.180','199.249.230.168','199.249.230.165','199.249.230.160','199.249.230.186','199.249.230.171','199.249.230.182','199.249.230.183','199.249.230.187','199.249.230.162','199.249.230.164','199.249.230.181','199.249.230.174','199.249.230.185','199.249.230.170','199.249.230.159','199.249.230.156','199.249.230.153','199.249.230.184','199.249.230.173','199.249.230.158','199.249.230.157','199.249.230.154','199.249.230.172','199.249.230.167','199.249.230.163','199.249.230.188','199.249.230.189','176.123.5.193','151.80.237.96','204.194.29.4','209.141.34.95','209.222.101.251','54.38.81.231','209.141.45.189','141.98.252.163','145.239.95.15','35.199.85.150','185.185.170.27','209.141.46.47','104.244.73.43','163.172.151.47','193.218.118.155','193.218.118.156','192.166.245.138','185.161.209.205','107.189.11.80','50.116.51.78','104.218.63.119','209.141.53.20','185.220.101.1','185.220.101.146','185.220.101.133','185.4.135.135','185.4.132.183','185.4.132.135','184.105.220.24','94.142.241.194','171.25.193.78','171.25.193.25','82.68.49.227','199.195.249.82','104.244.76.245','35.0.127.52','71.19.144.89','54.39.16.73','193.218.118.125','193.218.118.145','185.233.100.23','145.239.92.26','51.75.64.187','51.195.148.18','139.99.171.51','51.79.160.138','217.182.192.217','93.93.46.180','145.239.82.87','91.219.236.83','205.185.127.217','205.185.116.126','209.141.54.153','185.220.102.250','185.220.102.252','185.220.102.251','185.220.102.253','185.220.102.254','185.220.102.249','185.220.102.248','45.137.184.31','51.83.139.55','51.83.139.56','104.248.88.112','23.141.240.206','185.38.175.72','192.166.245.176','95.204.65.176','95.202.153.193','90.235.128.227','95.194.1.111','95.194.22.12','90.235.153.214','95.196.148.199','95.198.52.237','95.194.39.218','95.194.72.82','95.194.79.214','95.196.163.226','95.198.16.154','95.196.132.222','95.198.40.84','95.198.34.204','90.235.162.34','90.235.157.219','95.195.94.75','95.204.85.149','90.235.220.51','95.204.205.216','95.198.35.154','95.195.73.78','90.235.173.164','95.194.87.41','90.235.175.242','95.204.158.175','95.195.29.84','95.204.219.192','23.160.208.245','74.82.47.194','144.168.164.26','45.141.159.63','185.195.237.25','46.249.59.113','185.107.47.171','185.107.47.215','185.107.70.202','179.43.160.237','179.43.160.234','179.43.160.235','179.43.160.238','179.43.160.236','139.28.36.20','45.119.203.170','104.244.77.95','51.91.8.125','199.19.226.123','178.17.170.60','212.60.5.220','54.38.22.61','84.53.225.118','185.248.160.65','107.189.10.119','51.38.162.232','87.122.215.210','87.122.214.178','87.123.85.138','87.123.88.3','87.123.84.174','87.123.63.195','87.122.219.2','87.122.223.210','87.123.90.33','87.123.50.107','87.123.57.146','104.149.141.66','199.195.250.148','45.154.255.74','78.40.217.86','45.154.255.66','45.154.255.71','45.154.255.75','45.154.255.73','45.154.255.67','45.154.255.72','45.154.255.70','45.154.255.68','45.154.255.69','193.239.232.102','109.70.100.52','109.70.100.49','109.70.100.51','109.70.100.50','23.160.208.246','23.160.208.247','23.160.208.248','23.160.208.249','23.160.208.250','51.195.166.160','176.123.5.15','176.123.5.140','104.244.79.241','192.138.210.23','128.31.0.13','142.44.133.80','217.170.206.192','219.91.110.131','89.34.27.37','104.244.76.170','45.154.168.201','88.80.20.86','45.133.192.39','210.114.1.172','199.249.230.67','199.249.230.178','199.249.230.66','199.249.230.179','199.249.230.73','199.249.230.177','199.249.230.116','199.249.230.88','199.249.230.150','199.249.230.72','199.249.230.161','199.249.230.176','199.249.230.86','199.249.230.69','199.249.230.155','199.249.230.111','199.249.230.175','199.249.230.112','199.249.230.110','199.249.230.78','199.249.230.87','184.105.146.50','147.135.105.62','178.175.148.148','82.221.131.102','205.185.114.133','118.163.74.160','185.220.101.15','37.148.196.46','217.100.113.174','185.142.239.49','178.17.170.116','178.17.171.124','27.122.59.86','87.188.154.192','217.94.247.247','217.94.242.128','111.69.49.122','51.77.210.201','111.69.49.124','82.118.23.32','185.220.102.241','185.220.102.245','185.220.102.246','185.220.102.244','185.220.102.247','185.220.102.243','185.220.102.242','185.220.102.240','51.210.34.150','198.98.54.170','193.239.232.101','46.166.129.156','185.29.8.145','103.249.28.195','5.206.224.64','205.185.126.177','178.17.171.135','178.17.174.224','144.172.118.2','38.81.163.2','144.172.118.3','38.81.163.3','212.69.166.122','51.83.129.84','71.19.154.84','51.83.131.234','89.144.12.17','64.113.32.29','185.205.210.245','163.172.29.30','104.244.77.158','198.98.50.112','37.228.129.5','45.79.144.222','91.219.236.31','204.17.56.42','189.132.6.192','189.132.44.193','189.132.47.244','189.131.196.126','189.131.202.0','189.132.25.94','189.131.202.44','189.131.192.235','189.132.27.158','189.131.235.125','189.131.254.186','46.167.244.251','209.141.45.183','104.244.78.67','199.195.251.110','5.2.78.69','185.121.69.40','109.70.100.53','109.70.100.56','109.70.100.58','109.70.100.59','109.70.100.60','185.121.69.41','185.121.69.42','109.70.100.55','109.70.100.54','109.70.100.57','185.121.69.16','198.98.58.66','185.100.87.135','209.141.46.38','198.251.83.73','198.251.89.99','185.220.101.211','194.39.127.40','87.120.254.114','216.186.250.53','83.97.20.99','185.10.68.231','83.97.20.248','185.10.68.66','83.97.20.101','83.97.20.98','83.97.20.100','83.97.20.245','45.151.167.10','185.248.160.21','51.15.59.15','67.163.135.106','93.95.226.147','198.251.89.29','198.251.89.198','209.141.40.46','92.246.84.133','107.189.10.40','93.188.161.145','205.185.124.200','193.218.118.240','193.19.167.21','185.25.51.120','130.225.244.90','193.148.70.4','104.244.74.28','104.244.76.39','198.98.52.75','45.95.235.86','176.107.179.147','185.113.140.155','185.34.33.2','198.98.52.119','35.198.1.137','77.109.191.140','31.220.40.237','31.220.40.236','91.219.238.207','82.129.8.4','31.220.40.239','31.220.40.238','79.124.60.174','94.100.28.179','91.192.103.7','91.192.103.6','192.34.80.176','198.54.128.70','198.54.128.78','198.54.128.76','198.54.128.108','83.220.173.21','185.239.238.27','176.58.121.177','172.106.0.67','213.198.67.46','192.138.210.125','83.97.20.39','188.214.128.78','159.148.186.196','5.2.70.147','163.172.43.109','37.187.105.104','193.176.86.123','93.103.89.179','31.220.2.132','45.154.35.210','45.154.35.216','45.154.35.212','45.154.35.222','45.154.35.219','45.154.35.218','45.154.35.213','45.154.35.236','45.154.35.214','45.154.35.211','45.154.35.221','45.154.35.235','45.154.35.217','45.154.35.220','45.154.35.215','31.220.2.108','31.220.2.107','91.192.103.9','91.192.103.8','209.141.38.163','195.178.166.137','178.174.176.12','146.59.155.27','198.251.80.252','128.199.133.186','94.140.115.207','31.220.2.223','31.220.2.222','185.112.144.119','107.172.157.191','51.210.80.127','31.31.74.47','91.219.238.226','54.38.52.137','198.98.60.36','178.17.171.82','217.182.78.180','51.77.58.144','199.195.254.254','178.17.171.115','51.68.143.212','200.122.181.2','185.140.53.4','185.140.53.3','185.140.53.10','185.140.53.6','185.140.53.5','185.140.53.9','185.140.53.8','185.140.53.7','51.83.187.201','198.98.55.233','199.195.250.42','31.220.40.240','31.220.40.241','51.210.243.173','146.59.158.228','51.75.52.118','172.106.18.163','141.105.66.241','193.218.118.90','205.185.121.235','31.220.40.163','31.220.1.169','193.218.118.100','92.222.221.49','51.178.83.144','31.7.61.190','31.7.61.186','31.7.61.187','31.7.61.189','31.7.61.188','92.223.93.145','185.222.202.218','185.25.50.216','51.15.1.221','45.67.229.97','45.142.215.104','194.5.96.60','51.255.106.85','213.202.218.70','31.220.1.233','31.220.1.170','198.98.60.90','93.171.208.194','136.144.41.148','84.53.192.243','141.98.9.87','209.236.75.4','5.2.79.145','185.214.164.110','209.141.38.34','209.141.38.108','23.120.182.115','209.141.58.50','185.220.101.219','185.220.101.218','185.220.101.220','185.220.101.217','185.220.101.150','18.134.246.87','193.31.24.154','101.99.90.171','91.192.103.15','91.192.103.16','31.220.0.202','31.220.0.203','54.38.208.13','178.17.174.164','85.217.222.40','201.27.107.115','189.18.122.139','179.174.32.166','31.220.0.249','91.192.103.24','91.192.103.17','176.123.7.102','83.97.20.159','51.68.197.174','149.56.38.93','51.79.74.205','195.123.213.15','34.96.248.115','46.105.171.109','45.91.101.18','185.186.77.133','78.36.197.146','91.192.103.26','91.192.103.25','45.154.255.147','45.144.30.4','185.82.217.39','176.74.218.175','195.123.212.131','195.123.209.144','195.123.247.40','91.208.184.84','172.105.102.219','178.17.171.154','199.192.20.35','205.185.123.96','152.89.244.58','82.165.126.97','178.250.157.177','201.80.45.116','45.154.168.147','45.154.168.146','31.220.2.100','193.218.118.135','134.101.198.17','149.224.33.87','149.224.95.148','149.224.82.228','149.224.103.233','149.224.237.253','149.224.124.110','134.101.223.94','84.46.44.154','84.46.16.173','134.101.179.140','95.81.17.95','31.29.44.80','149.224.55.31','31.172.104.229','84.46.1.149','149.224.246.16','149.224.241.236','84.46.4.114','149.224.25.207','95.81.2.110','81.25.170.9','149.224.63.162','23.120.182.124','23.120.182.125','91.192.103.33','91.192.103.34','23.120.182.123','209.141.46.175','91.3.126.183','209.141.38.148','51.178.51.228','51.178.49.100','51.178.49.24','51.178.49.30','51.178.48.23','51.178.48.212','51.178.51.133','51.178.51.32','51.178.51.223','51.178.51.79','51.178.49.192','51.178.50.70','51.178.50.200','51.178.49.229','51.178.51.142','51.178.49.157','51.178.51.61','51.178.49.171','51.178.48.248','51.178.48.2','51.178.50.164','51.178.51.125','51.178.49.65','51.178.51.10','51.178.49.135','51.178.50.205','51.178.49.12','51.178.50.24','51.178.50.169','51.178.51.187','78.94.74.70','145.239.82.102','145.239.82.168','145.239.82.229','145.239.82.147','145.239.82.142','185.220.101.151','193.3.44.156','193.3.44.223','193.3.44.197','193.3.44.73','193.3.44.196','193.3.44.151','193.3.44.113','193.3.44.55','193.3.44.173','193.3.44.121','193.3.44.115','193.3.44.16','193.3.44.64','193.3.44.152','193.3.44.102','193.3.44.91','193.3.44.159','193.3.44.71','193.3.44.221','193.3.44.33','193.3.44.21','193.3.44.181','193.3.44.251','193.3.44.112','193.3.44.106','193.3.44.220','193.3.44.203','193.3.44.129','193.3.44.224','193.3.44.12','193.3.44.239','193.3.44.200','193.3.44.82','193.3.44.56','193.3.44.130','193.3.44.63','193.3.44.38','193.3.44.227','193.3.44.189','193.3.44.67','193.3.44.183','193.3.44.195','193.3.44.111','193.3.44.209','193.3.44.54','193.3.44.192','193.3.44.97','193.3.44.79','193.3.44.103','193.3.44.20','193.3.44.13','193.3.44.17','193.3.44.72','193.3.44.208','193.3.44.117','193.3.44.35','193.3.44.98','193.3.44.2','193.3.44.18','193.3.44.99','193.3.44.185','193.3.44.39','193.3.44.95','193.3.44.204','193.3.44.34','193.3.44.254','193.3.44.96','193.3.44.228','193.3.44.167','193.3.44.144','193.3.44.178','193.3.44.25','193.3.44.83','193.3.44.36','193.3.44.164','193.3.44.120','193.3.44.171','193.3.44.202','193.3.44.210','193.3.44.44','193.3.44.155','193.3.44.180','193.3.44.161','193.3.44.157','193.3.44.5','193.3.44.30','193.3.44.138','193.3.44.184','193.3.44.89','193.3.44.149','193.3.44.245','193.3.44.193','193.3.44.42','193.3.44.206','193.3.44.179','193.3.44.132','193.3.44.168','193.3.44.58','193.3.44.153','193.3.44.24','193.3.44.186','193.3.44.32','193.3.44.230','193.3.44.231','193.3.44.119','193.3.44.108','193.3.44.150','193.3.44.51','193.3.44.80','193.3.44.66','193.3.44.252','193.3.44.165','193.3.44.213','193.3.44.229','193.3.44.40','193.3.44.212','193.3.44.176','193.3.44.92','193.3.44.133','193.218.118.235','193.3.44.74','193.3.44.215','193.3.44.85','193.3.44.57','193.3.44.199','193.3.44.109','193.3.44.62','193.3.44.160','193.3.44.218','193.3.44.116','193.3.44.131','193.3.44.101','193.3.44.238','193.3.44.15','193.3.44.76','193.3.44.241','193.3.44.162','193.3.44.128','193.3.44.216','193.3.44.170','193.3.44.14','193.3.44.78','193.3.44.182','193.3.44.61','193.3.44.100','193.3.44.187','193.3.44.205','193.3.44.105','193.3.44.244','193.3.44.65','193.3.44.169','193.3.44.146','193.3.44.250','193.3.44.137','193.3.44.6','193.3.44.235','193.3.44.214','193.3.44.163','193.3.44.140','193.3.44.148','193.3.44.175','193.3.44.93','193.3.44.31','193.3.44.174','193.3.44.226','193.3.44.236','193.3.44.87','193.3.44.247','193.3.44.233','193.3.44.27','193.3.44.84','193.3.44.77','193.3.44.217','193.3.44.123','193.3.44.198','193.3.44.246','193.3.44.70','193.3.44.52','193.3.44.127','193.3.44.190','193.3.44.11','193.3.44.94','193.3.44.28','193.3.44.166','193.3.44.248','193.3.44.7','193.3.44.154','193.3.44.135','193.3.44.90','193.3.44.47','193.3.44.222','193.3.44.81','193.3.44.139','193.3.44.22','193.3.44.194','193.3.44.3','193.3.44.68','193.3.44.75','193.3.44.26','193.3.44.201','193.3.44.86','193.3.44.88','193.3.44.46','193.3.44.23','193.3.44.43','193.3.44.134','193.3.44.172','193.3.44.110','193.3.44.142','193.3.44.10','193.3.44.237','193.3.44.147','193.3.44.219','193.3.44.53','193.3.44.8','193.3.44.145','193.3.44.19','193.3.44.158','193.3.44.191','193.3.44.107','193.3.44.232','193.3.44.50','193.3.44.126','193.3.44.143','193.3.44.253','193.3.44.48','193.3.44.4','193.3.44.9','193.3.44.243','193.3.44.29','193.3.44.122','193.3.44.207','193.3.44.188','193.3.44.114','193.3.44.225','193.3.44.242','193.3.44.104','193.3.44.37','193.3.44.49','193.3.44.118','193.3.44.124','193.3.44.234','193.3.44.41','193.3.44.141','193.3.44.177','193.3.44.136','193.3.44.69','193.3.44.59','193.3.44.125','193.3.44.240','193.3.44.249','193.3.44.60','193.3.44.45','193.3.44.211','51.83.165.190','136.144.41.157','168.119.98.106','136.144.41.156','136.144.41.155','193.218.118.30','185.167.160.219','178.17.174.13','194.5.249.130','192.248.168.159','149.28.63.195','141.164.58.29','51.210.242.136','51.210.242.135','51.210.242.128','51.210.243.206','51.210.242.144','51.210.242.212','51.210.242.71','51.210.242.244','51.210.242.242','51.210.242.130','51.210.242.192','51.210.242.143','51.210.242.175','51.210.242.177','51.210.242.176','51.210.242.83','51.210.242.129','51.210.242.131','51.210.243.200','51.210.242.160','51.210.242.208','51.210.242.100','51.210.242.199','51.210.243.185','51.210.242.213','51.210.242.133','51.210.242.102','51.210.242.27','51.210.242.54','51.222.13.24','51.210.242.45','51.210.242.44','51.210.242.200','51.210.242.114','51.210.242.182','51.210.242.106','51.210.242.169','51.210.242.57','51.210.242.216','51.210.242.101','217.115.10.131','51.210.242.117','51.83.45.246','67.249.107.195','95.130.9.90','31.220.111.214','188.214.128.181','51.210.242.12','51.195.103.56','192.248.146.74','91.192.103.10','91.192.103.11','185.134.30.164','104.244.72.152','146.59.225.195','51.159.169.74','86.104.194.52','172.105.95.212','104.244.73.13','172.105.106.57','104.244.72.246','51.210.242.30','104.244.72.239','193.248.220.243','185.32.222.171','185.32.222.172','5.230.69.18','140.82.25.215','173.212.219.49','198.144.121.93','41.190.141.110','185.100.87.80','194.71.126.76','209.141.43.66','198.144.120.234','198.144.120.177','193.218.118.95','109.248.144.77','37.157.254.19','194.110.113.40','107.189.11.153','107.189.10.243','104.244.74.121','185.32.222.173','51.210.243.196','51.75.64.21','104.244.73.93','45.153.160.129','37.187.2.76','45.153.160.130','51.195.166.161','51.68.215.249','51.38.80.237','51.89.148.169','51.89.164.92','51.68.215.174','54.37.19.60','51.38.80.133','54.37.19.88','51.68.215.13','54.37.19.108','51.38.81.211','51.38.80.4','51.38.82.8','51.89.165.90','51.38.83.96','51.38.80.114','54.37.19.84','51.89.165.197','51.89.164.89','51.38.80.41','51.68.212.73','51.89.164.205','51.68.213.247','54.37.19.70','51.89.148.30','51.38.81.87','51.68.212.168','54.37.19.65','51.68.212.44','54.37.19.149','51.89.166.108','54.37.19.81','51.68.213.32','54.37.19.83','51.38.81.109','80.82.70.227','185.161.209.159','194.5.249.247','185.100.87.61','185.100.84.85','194.34.132.90','104.244.72.94','107.189.10.245','31.220.0.186','81.6.43.167','77.116.181.148','178.112.73.73','153.127.39.196','5.2.77.22','142.44.156.131','54.37.232.115','146.59.225.194','45.33.105.8','107.189.10.251','107.189.10.185','199.195.254.81','209.141.33.53','209.141.46.57','198.98.49.178','209.141.59.157','198.98.53.153','205.185.119.102','209.141.35.27','209.141.45.173','198.98.57.234','199.195.250.170','209.141.45.179','198.98.52.155','198.98.59.197','144.202.116.250','85.239.42.54','54.39.50.28','213.202.212.42','51.195.200.181','107.189.10.27','51.38.82.114','107.189.10.246','23.154.160.6','104.244.73.205','155.138.135.29','92.222.41.125','205.185.113.166','31.220.3.185','185.247.224.14','54.37.232.131','51.91.123.169','209.141.56.234','80.127.252.150','54.251.189.122','85.204.116.214','85.204.116.213','51.83.131.42','51.195.42.226','51.178.86.137','199.195.249.217','103.212.69.114','5.2.67.174','5.2.67.51','95.211.148.144','139.99.133.215','45.10.88.252','115.70.208.19','51.77.148.72','51.77.151.77','51.77.150.147','51.91.96.177','51.77.150.44','51.77.148.119','51.91.98.31','51.91.96.151','51.77.150.155','51.91.98.249','89.47.161.219','198.98.51.151','91.192.103.43','91.192.103.42','139.99.88.87','51.195.202.145','146.59.235.27','185.143.180.145','163.172.175.43','91.192.103.44','91.192.103.50','218.250.255.227','31.220.3.148','31.220.3.147','135.148.26.211','141.239.148.100','51.81.87.40','51.81.85.15','5.61.57.93','51.195.103.249','193.218.118.214','193.218.118.212','193.218.118.211','193.218.118.243','193.218.118.244','51.81.85.106','193.218.118.241','193.218.118.242','193.218.118.213','31.220.3.149','51.15.112.36','91.218.230.34','95.214.63.101','5.2.70.65','185.253.219.160','135.181.111.254','198.167.194.245','198.167.194.238','198.167.194.230','198.167.194.227','198.167.194.249','198.167.194.246','95.216.144.199','50.7.187.203','149.56.99.85','37.187.112.241','161.97.132.157','198.98.53.24','199.195.254.209','209.141.49.68','198.98.54.215','205.185.116.163','198.98.62.65','151.236.217.200','45.153.160.138','45.153.160.132','45.153.160.131','45.153.160.140','45.153.160.139','45.153.160.133','45.153.160.135','45.153.160.136','45.153.160.134','45.153.160.137','213.164.204.3','188.72.98.98','104.244.77.53','104.244.73.46','104.244.75.33','62.171.171.235','51.81.84.125','107.189.10.143','93.43.210.199','51.81.86.113','51.81.84.37','135.148.26.213','3.135.215.232','141.98.10.59','181.214.133.73','198.98.61.88','107.175.123.102','87.197.191.192','51.75.240.227','185.103.96.143'
	];

	public static $sql = [
		'%27', '@version()', '@user()', '/**/', 'group_concat(', '--', '%20select%20', '+select+', '%20from%20', '+from+', 'order by', 'order%20by%20', 'order+by', '%20select%20', 'information_schema', 'information_schema.', 'concat(', 'concat_ws(', 'like%20', 'limit%20', '%20where%20', '%20union%20all%20select%20', 'into', '+into+', '%20into%20', 'outfile', 'uniounionn', 'null', '--+-', '--%20-', '/*', '*/', 'concat_ws(mid(char(0),0,0)', '0x3a', '+and+', '%20and%20', 'c2nyaxb0', '%20having%20', '%20insert', '%201=1%20', '%20update%20', '+update+', '+having+', 'union', '%20union%20', '+union+', 'union+all', 'union%20all', '%20union%20all', 'where%20', '\'\'', '%27%27', '`', '``', ',','"', '""', '%27%20or"', '--%20or%20#', '%27%27%27%27%27%27%27%27%27%27union%20all', '%27%27%27%27%27%27%27%27%27%27union%20select','/*..*/', '%00', '(%20', ';%00', ',(select * from (select(sleep(10)))a)%2c(select%20*%20from%20(select(sleep(10)))a)%27;waitfor delay%27', 'waitfor%20delay', 'mid(', 'version()', '@,@', '%20order%20by', '--+', '%20order%20by%201--+', '1=1%20--', '%20or%201=1', '%20or%20', '%20having%20', '%20having%201=1', '1=1', 'x=y', 'x=x', '3409=3409', '%20and%20', '(%27pytW', '%20%27%', 'if((ascii(lower(substring((select user()),$i,1))))!=$s,1,benchmark(200000,md5(now())))', 'now()', 'sleep(', 'if(', '((', 'information_schema.tables', '1%00UNION%00SELECT%002--', '1%A0UNION%A0SELECT%A02--', '(1 between @version and "2") & 1 UNION SELECT 1', '%20between%20', 'binary%20(binary(1))%20UNION%20SELECT%202%20--', 'binary(', '1,2,3', '1=1%20AND-+-+-+-+~~((1))', 'null,', '1%27=sleep(1)=%271', 'and%20(select%20array_to_json(array_agg(users))::text::bool%20from%20users%20limit%201;', '::', '%27-(-1%27or%27-1)%27and%271=0%27union', 'iif(', 'updatexml(', '[randnum]'
	];

	public static $xss = [
		'%3C', '%3E', '%3Cscript',  '%3Cscript%3E', '%3C%2Fscript%3E', 'javascript%3A', 'alert%28', '%29%3B', '<', '<script', '<script>', '</script>', 'javascript:', 'alert(', ');', '("', '")', '(\'', '\')', 'switch(', 'switch{', 'onload='
	];

	public static $lfi = [
		'../', '../../', '../../../', '../../../../', '../../../../../', '../../../../../../', '==', '/etc/passwd', '.htaccess', '.htpasswd', '.git', '.env', '..$2f', '.sql', '.log', '.db'
	];

	public static $rfi = [
		'www.', 'http://', 'https://', 'http\:\/\/', 'https\:\/\/', '://'
	];

	public static $rce = [
		'&&', ';', 'ls', '&cmd=', 'system(', 'whoami', '-la', 'mkdir', 'wget%20', 'exec(', '&lt;!--#exec%20cmd=&quot;/bin/cat%20/etc/passwd&quot;--&gt;', '<?php system("cat /etc/passwd");?>', 'system(%27', 'system(', '<?php', 'cat%20', 'cat%20/etc/passwd', 'get_user_file("/etc/passwd")', '$(`cat /etc/passwd`)', '%0a','%0a ping -i 30 127.0.0.1 %0a', 'ping%20', 'pwd','echo%20','|%20ls%20-l%20/', 'curl%20', '{{[] .__ Class __.__ base __.__ subclasses __ ()}}','cd%20'
	];

	public static $bot = [
		'wget', 'sqlmap', 'nmap', 'arachni', 'util2pn', 'commix', 'nikto', 'sqlninja', 'sqliv', 'havij', 'whatweb', 'wpsscan', 'w3af', 'w3af.sf.net', 'w3af.org', 'python', 'cisco-torch', 'zeus', 'url_spider_pro', 'vega', 'vegabondo', 'vci', 'xget', 'xenu', 'wweb', '@nonymous', 'shodan', 'addresses.com', 'alexibot', 'grabber', 'netvampire', 'linkscan', 'magnet', 'superhttp', 'websucker', 'curl', 'python-requests'
	];
}
