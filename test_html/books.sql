-- MySQL dump 10.13  Distrib 5.1.71, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: db_library
-- ------------------------------------------------------
-- Server version	5.1.71-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `ID` varchar(10) NOT NULL,
  `BookName` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `Author` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `Publisher` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `Status` varchar(20) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES ('A-1','ACE程序员指南：网络与系统编程的使用设计模式','Stephen D.Huston,James CE Johnson,UmarSyyid,马维达','中国电力出版社 ','在架'),('A-2','奥默与海豚','沙尔达 奥兹坎','湖南文艺出版社','在架'),('A-3','暗时间','刘未鹏 ','电子工业出版社 ','在架'),('A-4','爱的五种语言 ','查普曼','江西人民出版社','在架'),('A-5','安妮日记','德 弗兰克 著 ','北京燕山出版社','在架'),('A-6','俺心中有一头骆驼 ','原老未　','人民邮电出版社 ','在架'),('B-1','背包里的彩云之南--我用十年走云南','沈泓 ','武汉出版社 ','在架'),('B-10','不抱怨的世界','(美)威尔 鲍温','陕西师范大学出版社','在架'),('B-11','冰与火之歌卷一：权力的游戏','乔治R.R马丁 著','重庆出版社','在架'),('B-12','边城','沈从文','长江文艺出版社','在架'),('B-13','白门柳','刘斯奋 ','河南文艺出版社 ','在架'),('B-14','本能：突破瓶颈，改变命运','贝尔 格里尔斯','同心出版社','借出'),('B-15','标竿人生 ','（美）华理克　','上海三联书店','在架'),('B-16','把你的英语用起来！副标题: 原地复活你放下多年的英语','伍君仪 / 刘晓光 ','外文出版社 ','在架'),('B-17','把时间当作朋友,运用心智获得解放','李笑来 ','电子工业出版社 ','借出'),('B-18','碧山01','左靖','金城出版社','在架'),('B-19','碧山02','左靖','金城出版社','借出'),('B-20','不要用爱控制我1','帕萃丝?埃文斯 ','京华出版社 ','在架'),('B-21','不要用爱控制我2','帕萃丝?埃文斯 ','京华出版社 ','在架'),('B-22','彼岸花','安妮宝贝 ','北京十月文艺出版社 ','在架'),('B-23','不要用爱控制我3','帕萃丝?埃文斯 ','京华出版社 ','在架'),('B-24','不要用爱控制我4','帕萃丝?埃文斯 ','京华出版社 ','在架'),('B-25','不可不知的导游趣味常识','《导 游趣味圣经》编辑部 ','旅 游教育出版社 ','在架'),('B-26','白夜行','〔日〕东 野圭吾　著，刘 姿君　译 ','南海出版社','在架'),('B-27','不畏将来 不念过去 ','十二','江苏文艺出版社','在架'),('B-28','冰与火之歌卷2 列王的纷争','（美）马丁　著','重庆出版社','在架'),('B-29','冰与火之歌卷3 冰雨的风暴','（美）马丁　著','重庆出版社','在架'),('B-3','白鹿原','陈忠实','北京出版社出版集团','在架'),('B-30','冰与火之歌卷4 群鸦的盛宴','（美）马丁　著','重庆出版社','在架'),('B-31','冰与火之歌卷5 魔龙的狂舞 ','（美）马丁　著','重庆出版社','在架'),('B-32','不留心，看不见','\r\n\r\n桑格格　','\r\n\r\n广西师范大学出版社','在架'),('B-4','百年孤独','（哥伦）马尔克斯','南海出版公司','在架'),('B-5','编程之美,副标题: 微软技术面试心得',' Maurice J. Bach','电子工业出版社','在架'),('B-6','不换思想就换人','赫森 (HursonT.)， 张猛译 ','机械工业出版社','在架'),('B-7','把东条英机送上绞刑架的中国人 ','梅朝荣 编著 ','武汉大学出版社 ','在架'),('B-8','彼得.林奇教你理财','彼得.林奇','机械工业出版社','在架'),('B-9','别相信任何人   ','【英】S. J. 沃森 著','中信出版社','在架'),('C-1','出国自助游教室','三少','机械工业出版社','在架'),('C-10','成都夜太high ','乡村阳光悦读工坊 ','中国旅游出版社 ','在架'),('C-11','畅游民族走廊 ','王清华 ','云南民族出版社 ','在架'),('C-12','藏经洞史话 ','沙武田 ','民族出版社 ','在架'),('C-13','纯粹理性批判 ','[德]康德  邓晓芒 译 ','人民出版社 ','在架'),('C-14','从历史看组织 ','[美]许倬云 ','上海人民出版社 ','在架'),('C-15','拆掉思维里的墙','古典','中国书店','借出'),('C-16','沉思录','Marcus Aurelius（马克-奥勒留）著 ','未知','在架'),('C-17','重遇未知的自己：爱上生命中的不完美','张德芬 ','湖南文艺出版社 ','在架'),('C-18','禅与摩托车维修艺术 ','罗伯特 M.波西格 (Robert M.Pirsig) ','重庆出版社','在架'),('C-19','从一到无穷大','G 伽莫夫','科学出版社','在架'),('C-2','仓央嘉措','李叶倩,任乐乐','作家出版社','借出'),('C-20','次第花开','希阿荣博堪布','海南出版社','在架'),('C-21','畅游日本','佰程旅行网《畅游日本》编委会','中国轻工业出版社','在架'),('C-22','从你的全世界路过','张嘉佳','湖南文艺出版社','在架'),('C-23','陈寅恪与傅斯年 ','岳南 ','陕西师范大学出版社 ','借出'),('C-24','楚墓 ','史杰鹏 ','广东人民出版社 ','在架'),('C-25','灿烂千阳','卡勒德?胡赛尼 ','世纪文景 ','在架'),('C-3','长尾理论','Chris  Anderson ','中信出版社','在架'),('C-4','沉默的大多数','王小波 ','中国青年出版社','在架'),('C-6','禅宗与道家','南怀瑾','复旦大学出版社','借出'),('C-7','长征','王树增','人民文学出版社','在架'),('C-8','长征','王树增','人民文学出版社','在架'),('C-9','尘劫:知青畅想曲（修订本）','丁晓禾','中共党史出版社','在架'),('D-1','大数据:互联网大规模数据挖掘与分布式处理','王斌 (译者)','人民邮电出版社','在架'),('D-10','读史质疑:戳破历史的华美外壳 ','王重旭 ','中国传媒大学出版社 ','在架'),('D-11','当中国称霸海上 ','[美]李露晔  邱仲麟 译 ','广西师范大学出版社 ','在架'),('D-12','大匠之路:范曾画传 ','邵盈午 ','河北教育出版社 ','在架'),('D-13','代码之美','(美）奥莱姆（Oram，A），维尔森（Wilson，G）编；BC Group译','机械工业出版社','在架'),('D-14','大设计','（英）斯蒂芬 霍金，（英）列纳德 蒙洛迪诺 ','湖南科技出版社 ','在架'),('D-15','单反摄影宝典','雷依里，郑毅 ','水利水电出版社 ','在架'),('D-16','大漠谣 新版','桐华 ','湖南文艺出版社 ','在架'),('D-17','断层线（Fault Lines）','拉古拉迈 拉詹','中信出版社','在架'),('D-18','大而不倒（Too Big to Fall）','Andrew Ross Sorkin','Viking Adult','在架'),('D-19','岛','（英）希斯洛普　','南海出版社','在架'),('D-2','大话存储2:存储系统架构与底层原理极限剖析','张东','清华大学出版社 ','借出'),('D-20','单车上路 ','刘文 ','华文出版社','在架'),('D-21','丹尼的15000公里骑行历险记','丹尼.本特','龙门书局 ','在架'),('D-22','动物绘 38种可爱动物的色铅笔图绘','飞乐鸟　','水利水电出版社','在架'),('D-23','大数据时代','（英）迈尔-舍恩伯格 ','浙江人民出版社 ','借出'),('D-24','大数据挖掘套装','【美】Anand Rajaraman，Jeffrey D. Ullman','人民邮电出版社','借出'),('D-25','独自之旅','莱奥 罗格塞斯','新世界出版社','在架'),('D-26','东南亚旅游lets go','东南亚旅游let’s go 编辑部 ','广西师范大学出版社','借出'),('D-27','第七天','余华','新星出版社 ','在架'),('D-28','小脚大脚一起走：带着孩子去旅行','万之逸','机械工业出版社','借出'),('D-29','导游语言艺术一本通','蒋文中? ','旅 游教育出版社 ','在架'),('D-3','DSLR数码单反摄影构图与用光圣经','创锐摄影 ','人民邮电出版社','在架'),('D-30','到大地尽头','[以]格罗斯曼  ','山东文艺出版社','在架'),('D-31','盗墓笔记.1','南派三叔','上海文化出版社','借出'),('D-32','盗墓笔记.2','南派三叔','上海文化出版社','借出'),('D-33','盗墓笔记.3','南派三叔','上海文化出版社','在架'),('D-34','得未曾有','\r\n\r\n庆山（安妮宝贝） 著','北京十月文艺出版社','在架'),('D-35','大英博物馆世界简史','尼尔?麦格雷戈','新星出版社','在架'),('D-36','大空头','[美]刘易斯 ','中信出版社 ','在架'),('D-37','丁丁历险记-《丁丁在刚果》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-38','丁丁历险记-《丁丁在美洲》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-39','丁丁历险记-《法老的雪茄》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-4','第五项修炼:学习型组织的艺术与实践','（美）圣吉','中信出版社','在架'),('D-40','丁丁历险记-《蓝莲花》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-41','丁丁历险记-《破损的耳朵》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-42','丁丁历险记-《黑岛》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-43','丁丁历险记-《奥托卡王的权杖》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-44','丁丁历险记-《金钳螃蟹贩毒集团》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-45','丁丁历险记-《神秘的流星》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-46','丁丁历险记-《独角兽号的秘密》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-47','丁丁历险记-《红色拉克姆的宝藏》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-48','丁丁历险记-《七个水晶球》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-49','丁丁历险记-《太阳神的囚徒》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-5','道家、密宗与东方神秘','南怀瑾','复旦大学出版社','在架'),('D-50','丁丁历险记-《黑金之国》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-51','丁丁历险记-《奔向月球》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-52','丁丁历险记-《月球探险》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-53','丁丁历险记-《向日葵教授绑架案》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-54','丁丁历险记-《货舱里的黑幕》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-55','丁丁历险记-《丁丁在西藏》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-56','丁丁历险记-《绿宝石失窃案》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-57','丁丁历险记-《714航班》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-58','丁丁历险记-《丁丁与丛林战士》','（比利时）埃尔热 编绘 ','中国少年儿童出版社','在架'),('D-59','敦煌','井上靖 ','北京十月文艺出版社 ','借出'),('D-6','丁玲的最后37年','敬文东，秦林芳','中国文史出版社','在架'),('D-60','大数据在中国 ','赵伟 ','江苏文艺出版社 ','在架'),('D-7','帝国的惆怅:中国传统社会的政治与人性 ','易中天 ','文汇原创丛书 ','在架'),('D-8','大话方言 ','易中天 ','上海文艺出版社 ','在架'),('D-9','大历史不会萎缩 ','黄仁宇 ','广西师范大学出版社 ','在架'),('E-1','Excel函数活用范例大辞典','何先军','中国铁道出版社','在架'),('E-2','二月河文集-康熙大帝','二月河',' 长江文艺出版社 ','在架'),('E-3','二月河文集-雍正大帝','二月河',' 长江文艺出版社 ','在架'),('E-4','二月河文集-乾隆大帝','二月河',' 长江文艺出版社 ','在架'),('E-5','二战那些事','','广东人民出版社 ','在架'),('F-1','法国简史（第二版） ','Roger Price ','上海外语教育出版社 ','在架'),('F-2','福尔摩斯探案全集（上、中、下）','柯南道尔　','天津教育出版社','在架'),('F-3','蜂蜜绿茶','John Ho','生活.读书.新知三联书店','在架'),('F-4','分开旅行','陶立夏 ','北京联合出版公司 ','在架'),('F-5','番茄工作法图解：简单易行的时间管理方法','[瑞典] Staffan Noteberg','人民邮电出版社 ','在架'),('F-6','飞行骑 笨鸡走川藏','作 者：笨鸡 ','出版社: 吉林出版集团 ','在架'),('F-7','菲律宾','澳大利亚Lonely Planet公司','中国地图出版社','在架'),('G-1','怪诞心理学:揭秘不可思议的日常现象','（英）怀斯曼　著，路本福　译','天津教育出版社','在架'),('G-10','过得刚好','郭德纲','北京联合出版公司','在架'),('G-11','跟着君之学烘焙','君之','北京科学技术出版社 ','借出'),('G-12','跟着君之学烘焙Ⅱ ','君之','北京科学技术出版社 ','在架'),('G-13','孤独六讲 ','蒋勋 ','广西师范大学出版社?理想国 ','在架'),('G-2','光与镜头:通往卓越影像之路 ','罗伯特 希尔施','世界图书出版公司','在架'),('G-5','怪诞行为学 ','艾瑞里','中信出版社 ','在架'),('G-6','孤独要趁好时光:我的欧洲私旅行','张朴','现代出版社','在架'),('G-7','国史新论','钱穆','三联书店','在架'),('G-8','郭沫若的最后29年','敬文东，贾振勇','中国文史出版社','在架'),('G-9','观止-微软创建NT和未来的夺命狂奔','G.Pascal Zachary','机械工业出版社','在架'),('H-1','80x86汇编语言基础教程','Richard C.Detmer','机械工业出版社','借出'),('H-10','好妈妈胜过好老师','尹建莉　','作家出版社','在架'),('H-11','胡兰成经典作品集-今生今世','胡兰成','中国长安出版社 ','在架'),('H-12','胡兰成经典作品集-山河岁月','胡兰成','中国长安出版社 ','在架'),('H-13','胡兰成经典作品集-禅是一支花','胡兰成','中国长安出版社 ','在架'),('H-14','花之绘 38种花的色铅笔图绘(花的色铅笔绘物语，让美丽在指尖绽放)','飞乐鸟　','水利水电出版社','在架'),('H-15','回忆录四部曲之一：昨天的云','王鼎钧 ','生活 读书 新知三联书店','在架'),('H-16','回忆录四部曲之二：怒目少年','王鼎钧 ','生活 读书 新知三联书店','在架'),('H-17','回忆录四部曲之三：关山夺路','王鼎钧 ','生活 读书 新知三联书店','在架'),('H-18','回忆录四部曲之四：文学江湖','王鼎钧 ','生活 读书 新知三联书店','在架'),('H-19','霍乱时期的爱情','[哥伦比亚]加西亚 马尔克斯','南海出版社','在架'),('H-2','海权论','（美）马汉 ','同心出版社 ','在架'),('H-20','活着','余华','作家出版社','在架'),('H-21','浩荡两千年','吴晓波','中信出版社 ','在架'),('H-22','黑水迷踪','(英)杰森?路易斯　 ','新世界出版社 ','在架'),('H-23','会做饭的孩子走到哪里都能活下去','（日）安武信吾 ','南海出版社','在架'),('H-3','黑天鹅:如何应对不可预知的未来（升级版）','（美）塔勒布　著，万丹，刘宁　译','中信出版社','在架'),('H-5','杭州夜太high ','乡村阳光悦读工坊 ','中国旅游出版社 ','在架'),('H-6','胡适口述自传 ','胡适 口述  康德刚 整理 ','安徽教育出版社 ','在架'),('H-7','话说长江 ','未知','上海科学技术文献出版社 ','在架'),('H-8','黑客与画家','Paul   Graham','人民邮电出版社','借出'),('H-9','霍金传 ','','湖南科技出版社 ','在架'),('I-1','Intel系列微处理器体系结构、编程与接口','巴里 , B.布雷 作 ','机械工业出版社','在架'),('J-1','精通UNIX Shell脚本编程','米歇尔 （Randal K．MiChael）','清华大学出版社','借出'),('J-10','计算机系统结构(英文版第2版)','(英）威廉斯（Williams,R.） 著','机械工业出版社','借出'),('J-11','Java编程思想(第4版)','（美）埃克尔 Bruce Eckel著','机械工业出版社','借出'),('J-12','Java编程思想(第4版)','（美）埃克尔 Bruce Eckel著','机械工业出版社','借出'),('J-13','Java核心技术卷2:高级特性','(美)霍斯特曼 等著，陈鹏 等译','机械工业出版社','在架'),('J-14','Java核心技术卷2:高级特性','(美)霍斯特曼 等著，陈鹏 等译','机械工业出版社','在架'),('J-15','解析极限编程：拥抱变化','Erich Gamma, Kent Beck','中国电力出版社','在架'),('J-16','机器翻译研究','冯志伟','中国对外翻译出版公司','借出'),('J-17','纪连海新解乾隆朝三大名臣 ','纪连海 ','光明日报出版社 ','在架'),('J-18','菊与刀:日本文化的类型 ','鲁思・本尼迪克物 ','商务印书馆 ','借出'),('J-19','基督教简史 ','陈钦庄 ','人民出版社 ','在架'),('J-2','交互式计算机图形学-基于OpenGL着色器的自顶向下方法','（美）Edward Angel,（美）Dave Shreiner 著','电子工业出版社','在架'),('J-20','经学史','[日]安井小太郎 ','万卷楼 ','在架'),('J-21','即将来临的经济崩溃','斯蒂芬李柏 ','东方出版社 ','在架'),('J-22','计算机的心智-操作系统之哲学原理','邹恒明','机械工业出版社','在架'),('J-23','家庭园艺手册','（美）贝利','天津教育出版社','在架'),('J-24','九型人格','（美） 帕尔默','华夏出版社','在架'),('J-25','极客与团队:软件工程师的团队生存秘笈 ','菲茨帕特里克, 萨斯曼','人民邮电出版社','在架'),('J-26','健康生活新开始','〔美〕哈维 戴蒙德 ','南海出版社','在架'),('J-27','柬埔寨和吴哥寺','日本大宝石出版社　编著','中国旅游出版社','在架'),('J-28','绝望锻炼了我：朴槿惠自传',' 朴槿惠','译林出版社','在架'),('J-29','具体数学：计算机科学基础（第2版）','美)Ronald L. Graham,(美)Donald E. Knuth,(美)Oren','人民邮电出版社 ','在架'),('J-3','旧制度与大革命','托克维尔 ','商务印书馆 ','在架'),('J-30','季羡林说北大那些人','季羡林 ','','在架'),('J-31','季羡林说北大那些事儿','季羡林 ','','在架'),('J-32','金刚经说什么','南怀瑾','复旦大学出版社','在架'),('J-33','巨富：全球超级新贵的崛起及其他人的没落 ','克里斯蒂娅?弗里兰　','中信出版社 ','在架'),('J-5','经济为什么会崩溃','〔美〕彼得.D.希夫 安德鲁.J.希夫','中信出版社','借出'),('J-6','Java核心技术卷1:基础知识','(美）昊斯特曼 著，叶乃文，邝劲筠，杜永萍 译','机械工业出版社','在架'),('J-7','Java核心技术卷1:知识','(美）昊斯特曼 著，叶乃文，邝劲筠，杜永萍 译','机械工业出版社','借出'),('J-8','计算机文化(英文版第10版) 附光盘','(美）帕金斯, 奥贾 著 ','机械工业出版社','在架'),('J-9','计算机文化(英文版第10版) 附光盘','(美）帕金斯, 奥贾 著 ','机械工业出版社','在架'),('K-2','克鲁格曼的预言--美国经济迷失的背后','保罗-克鲁格曼 (Paul Krugman),张碧琼译 ','机械工业出版社','在架'),('K-3','开国将军轶事（续集） ','吴东峰 ','解放军文艺出版社 ','在架'),('K-4','看见  ',' 柴静','广西师范大学出版社','在架'),('K-5','苦才是人生','索达吉堪布　','甘肃人民美术出版社 ','在架'),('K-6','看不见的猩猩','美）查布里斯，（美）西蒙斯　著 ','中国人民大学出版社','在架'),('L-1','浪潮之巅','吴军','电子工业出版社','在架'),('L-10','刘心武“红学”之疑 ','郑铁生 ','新华出版社 ','在架'),('L-11','伶人往事：写给不看戏的人看 ','章诒和 ','湖南文艺出版社 ','在架'),('L-12','刘心武揭秘《红楼梦》第二部 ','刘心武 ','东方出版社 ','在架'),('L-13','lINUX/unix高级编程','红旗软件有限公司','清华大学出版社','在架'),('L-14','六小龄童品西游(上) 附光盘)','六小龄童 ','机械工业出版社','在架'),('L-15','伦敦塔集雨人','斯图亚特','上海人民出版社','在架'),('L-16','了不起的盖茨比','菲兹杰拉德 ','天津人民出版社 ','在架'),('L-17','历史是什么','卡尔','商务印书馆','在架'),('L-18','论中国','（美）基辛格　','中信出版社','在架'),('L-19','聆听音乐','（美）克雷格 莱特（Craig Wright）','生活.读书.新知三联书店 ','在架'),('L-2','论中国','（美）基辛格　著，胡利平　等译','中信出版社','在架'),('L-20','逻辑思维训练大全集','余亚杰　','同心出版社','在架'),('L-21','狼图腾','姜戎','长江文艺出版社 ','在架'),('L-22','老北京新北京（2012-2013）','《旅 游圣经》编辑部 ','北 京航空航天大学出版社 ','在架'),('L-23','罗布泊档案','高建群','陕西师范大学出版社','在架'),('L-24','林语堂英译精品??板桥家书','郑板桥　','安徽科学技术出版社','在架'),('L-25','理想国','柏拉图 ','中国华侨出版社','在架'),('L-26','朗读手册1','〔美〕吉姆?崔利斯 ','南海出版社','在架'),('L-27','朗读手册2','〔美〕吉姆?崔利斯 ','南海出版社','在架'),('L-28','朗读手册3','〔美〕吉姆?崔利斯 ','南海出版社','在架'),('L-29','历史学原来这么有趣','周海燕　','化学工业出版社','在架'),('L-3','聆听宇宙的歌','莫言','中国文史出版社','在架'),('L-4','六小龄童品西游(下) 附光盘)','六小龄童 ','机械工业出版社','在架'),('L-5','懒人爱卤味','梁琼白','中国轻工业出版社','在架'),('L-6','老子他说','南怀瑾','复旦大学出版社','在架'),('L-7','赖声川的创意学','赖声川','中信出版社','在架'),('L-8','龙旗飘扬的舰队-中国近代海军兴衰史 ','姜鸣 ','三联书店 ','在架'),('L-9','乱世存亡 ','弘治、黄吉平、孙大超、张鑫典 ','中国友谊出版公司 ','在架'),('M-1','1910,莫理循中国西北行（全二册） ','莫理循 ','福建教育出版社 ','借出'),('M-10','莫言文集：食草家族','莫言','上海文艺出版社','在架'),('M-11','莫言文集：四十一炮','莫言','上海文艺出版社','在架'),('M-12','莫言文集：酒国','莫言','上海文艺出版社','在架'),('M-13','莫言文集：生死疲劳','莫言','上海文艺出版社','在架'),('M-14','莫言文集：天堂蒜薹之歌','莫言','上海文艺出版社','在架'),('M-15','麦当劳准则','保罗・法赛拉(Paul Facella)、阿迪那・戈恩(Adina Genn)、 曹蔓译 ','机械工业出版社','在架'),('M-16','马瑞芳揭秘聊斋志异 ','马瑞芳 ','东方出版社 ','在架'),('M-17','毛佩琦细解明朝十七帝(第一部） ','毛佩琦 ','光明日报出版社 ','在架'),('M-18','毛佩琦正说永乐大帝-朱棣 ','毛佩琦 ','花山文艺出版社 ','在架'),('M-19','民进党研究 ','李敖 ','中国友谊出版公司 ','在架'),('M-2','密码传奇','赵燕枫','科学出版社','在架'),('M-20','墨子思想新探 ','黄三省 ','万卷楼 ','在架'),('M-21','明朝那些事儿：朱元璋卷 ','当年明月 ','中国友谊出版公司 ','在架'),('M-22','面向对象分析和设计','定海','清华大学出版社','在架'),('M-23','美国创新在衰退','Judy Estrin','机械工业出版社','在架'),('M-24','梦的解析','（奥）西格蒙德 弗洛伊德　',' 国际文化出版公司','在架'),('M-25','梦境解析','（美）米勒　','北京燕山出版社','在架'),('M-26','没有在一起，也好','吴淡如 ','现代出版社 ','在架'),('M-27','美国大萧条 [平装]','默里 罗斯巴德(Rothbard M.N.) ','上海人民出版社;','在架'),('M-28','母乳育儿全书','威廉 西尔斯,玛莎 西尔斯,罗伯特 西尔斯,詹姆斯 西尔斯  ','南海出版社','在架'),('M-29','美食家的字母表','费雪 ','新星出版社 ','在架'),('M-3','莫言散文新编','莫言','文化艺术出版社','在架'),('M-30','梦想与路径1','梁由之 ','商务印书馆 ','在架'),('M-31','梦想与路径2','梁由之 ','商务印书馆 ','在架'),('M-32','梦想与路径3','梁由之 ','商务印书馆 ','在架'),('M-33','美的历史','翁贝托 艾柯','中央编译出版社','在架'),('M-34','民主的细节 ','刘瑜 ','上海三联书店','在架'),('M-35','美国种族简史  ','[美] 托马斯 索威尔','中信出版社','在架'),('M-36','猫咪绘：33只萌猫的色铅笔图绘','飞乐鸟　','水利水电出版社','在架'),('M-37','墨西哥旅行笔记','徐振亚','江西美术出版社有限责任公司 ','在架'),('M-38','敏捷软件开发??原则、模式与实践','(美)Robert C?Martin 邓辉 译 孟岩 审','清华大学出版社','在架'),('M-39','明朝那些事儿-朱元璋：从和尚到皇帝','当年明月','北京联合出版社','借出'),('M-4','莫言文集：丰乳肥臀','莫言','上海文艺出版社','在架'),('M-40','明朝那些事儿-朱棣：逆子还是明君','当年明月','北京联合出版社','在架'),('M-41','明朝那些事儿-太监弄乱的王朝','当年明月','北京联合出版社','在架'),('M-42','明朝那些事儿-妖孽横行的宫廷','当年明月','北京联合出版社','在架'),('M-43','明朝那些事儿-内阁不相信眼泪','当年明月','北京联合出版社','在架'),('M-44','明朝那些事儿-帝国，山雨欲来','当年明月','北京联合出版社','在架'),('M-45','明朝那些事儿-拐弯中的帝国','当年明月','北京联合出版社','在架'),('M-46','明朝那些事儿-人间再无魏忠贤','当年明月','北京联合出版社','在架'),('M-47','明朝那些事儿-1644，最后的较量','当年明月','北京联合出版社','在架'),('M-48','卖故事','','','在架'),('M-5','莫言文集：蛙','莫言','上海文艺出版社','在架'),('M-6','莫言文集：红高粱家族','莫言','上海文艺出版社','在架'),('M-7','莫言文集：檀香刑','莫言','上海文艺出版社','在架'),('M-8','莫言文集：十三步','莫言','上海文艺出版社','在架'),('M-9','莫言文集：红树林','莫言','上海文艺出版社','在架'),('N-1','你若安好,便是晴天--林徽因传','白落梅　','中国华侨出版社','在架'),('N-10','南渡北归（全三册)','岳南　','湖南文艺出版社','在架'),('N-11','南明史（全二册）','顾诚 ','光明日报出版社','在架'),('N-12','牛棚杂忆：水墨插图版','季羡林 ','中国青年出版社 ','在架'),('N-2','能源重塑世界','（美）丹尼尔-耶金 著 阎志敏 译','石油工业出版社','在架'),('N-3','南怀瑾先生侧记','刘雨虹','时事出版社','在架'),('N-4','诺门罕：日本第一次战败 ','松本草平,华野 ','山东人民出版社 ','在架'),('N-5','南怀瑾谈历史与人生','练性乾','复旦大学出版社','在架'),('N-6','能源重塑世界（下册）','（美）丹尼尔-耶金 著 阎志敏 译','能源工业出版社','在架'),('N-7','挪威的森林','村上春树','上海译文出版社','在架'),('N-8','脑筋急转弯 大全集','黄青翔　主编','中国华侨出版社','借出'),('N-9','尼泊尔(Lonely Planet)','澳大利亚LonelyPlanet公司　','中国地图出版社','在架'),('O-1','Oracle Database 9i/10g/11g编程艺术:深入数据库体系结构(第2版)','凯特(Thomas Kyte)、苏金国、王小振、 等','人民邮电出版社','借出'),('O-2','0day安全：软件漏洞分析技术（第2版）','王清 ','电子工业出版社','在架'),('O-3','0~6岁A+育儿法','陈鲁 ','南海出版社 ','借出'),('O-4','欧洲文明十五讲','陈乐民','北京大学出版社','在架'),('O-5','0-6岁A+育儿法','威廉 西尔斯,玛莎 西尔斯,罗伯特 西尔斯,詹姆斯 西尔斯  ','南海出版社','在架'),('P-1','Perl语言编程（影印版）（第4版）（上册）','(美）克里斯蒂安森','东南大学出版社','在架'),('P-2','平凡的世界','路遥','北京十月文艺出版社 ','在架'),('P-3','Python编程（上册）','Mark  Lutz','东南大学出版社','借出'),('P-4','Perl语言编程（影印版）（第4版）（下册）','(美)克里斯蒂安森','东南大学出版社','借出'),('P-5','Python编程（下册）','Mark Lutz','东南大学出版社','借出'),('Q-10','钦哲文集-人间是剧场','(不丹)宗萨蒋扬钦哲仁波切','深圳报业集团出版社','在架'),('Q-11','钦哲文集-佛教的见地与修道','(不丹)宗萨蒋扬钦哲仁波切','深圳报业集团出版社','在架'),('Q-12','钦哲文集-朝圣：到印度圣地做什么','(不丹)宗萨蒋扬钦哲仁波切','深圳报业集团出版社','在架'),('Q-13','钦哲文集-不是为了快乐：前行修持指引','(不丹)宗萨蒋扬钦哲仁波切','深圳报业集团出版社','在架'),('Q-2','潜规则：中国历史中的真实游戏','吴思','复旦大学出版社 ','在架'),('Q-3','期权入门与精通','W.爱德华-奥姆斯特德,梁彩云,天博 ','机械工业出版社','在架'),('Q-4','清史十五讲','张研,牛贯杰','北京大学出版社','在架'),('Q-5','秦汉史','钱穆','三联书店','在架'),('Q-6','全球最美的地方特辑-美国','《图行世界》编辑部','中国旅游出版社','在架'),('Q-7','曲终人不散','张允和? ','中央编译出版社 ','在架'),('Q-8','钱钟书英文文集','钱?书 ','外语教学与研究出版社 ','在架'),('Q-9','钦哲文集-正见：佛陀的证悟','(不丹)宗萨蒋扬钦哲仁波切','深圳报业集团出版社','在架'),('R-10','日本战国名将风云录：德川家康 ','古木 ','中国工人出版社 ','借出'),('R-11','日本战国名将风云录：织田信长 ','古木 ','中国工人出版社 ','在架'),('R-12','人间词话 ','滕咸惠 ','吉林文史出版社 ','在架'),('R-13','人的行动:关于经济学的论文(套装上下册) ',' 路德维希 冯 米塞斯 (作者), 余晖 (译者) ','上海人民出版社','在架'),('R-14','如何说孩子才会听 怎么听孩子才肯说','（美）玛兹丽施　著，安燕玲　译','中央编译出版社','在架'),('R-15','人生需要揭穿','丁丁张','中信出版社 ','在架'),('R-16','日本商业之父涩泽荣一传','鹿岛茂','浙江大学出版社','在架'),('R-17','人生的起点和终站','南怀瑾','东方出版社','在架'),('R-18','如何看一幅画 ','Franoise Barbe-Gall ','中信出版社 ','在架'),('R-19','日本-Lonely Planet旅行指南系列','澳大利亚Lonely Planet公司','中国地图出版社','在架'),('R-2','人月神话','布鲁克斯　','清华大学出版社 ','在架'),('R-3','让孩子的大脑自由','梅迪纳 ','浙江人民出版社 ','在架'),('R-4','软件工程(英文版. 第8 版)','(英)萨默维尔 Sommerville,I. 著','机械工业出版社','在架'),('R-5','软件工程(英文版. 第8 版)','(英)萨默维尔 Sommerville,I. 著','机械工业出版社','在架'),('R-6','软件工程--实践者的研究方法','(美) 普雷斯曼 著，郑人杰 等译','机械工业出版社','借出'),('R-7','如何准备PMP考试 (第四版)','金英勋,石泉,杨磊 ','机械工业出版社','在架'),('R-8','日本四书：洞察日本民族特性的四个文本 ','蒋百里,戴季陶,等 ','线装书局 ','在架'),('R-9','日本战国名将风云录：武田信玄 ','古木 ','中国工人出版社 ','在架'),('S-1','史蒂夫-乔布斯传','沃尔特.艾萨克森','中信出版社','在架'),('S-10','时间简史/果壳中的宇宙（金装插图版）','（美）史蒂芬-霍金 著者,忠超 译者','湖南科技出版社','借出'),('S-11','Solaris性能与工具','麦克道格','机械工业出版社 ','借出'),('S-12','Shell脚本学习指南 ','麦克道格','机械工业出版社 ','借出'),('S-13','深入理解LINUX内核（第三版）','博韦，西斯特 著','中国电力出版社','借出'),('S-14','三国机密（全两册）','马伯庸 ','江苏人民出版社 ','在架'),('S-15','摄影师的视视界','迈克尔.弗里曼','人民邮电出版社 ','在架'),('S-16','数码摄影完美曝光技法 ','迈克尔.弗里曼','中国青年出版社 ','在架'),('S-17','摄影构图圣经 ','未知','中国青年出版社 ','在架'),('S-18','思考,快与慢','（美）尼尔.卡尼曼 著,胡晓姣,李爱民,何梦莹译','中信出版社','在架'),('S-19','史记','司马迁','印刷工业出版社','借出'),('S-2','深入理解Oracle Exadata ','奥斯本（Kerry Osborne）、Randy Johnson、黄凯耀','电子工业出版社','借出'),('S-20','生物伦理学十五讲','高崇明,张爱琴','北京大学出版社','在架'),('S-21','思无邪：追绎前生的记忆 ','安意如 ','天津教育出版社 ','在架'),('S-22','商道 ','崔仁浩著 王宜胜译 ','世界知识出版社 ','在架'),('S-23','时间简史：从大爆炸到黑洞 ','史蒂芬.霍金  许明贤、吴忠超 译 ','湖南科学技术出版社 ','借出'),('S-24','盛世之毁：甲午战争110年祭 ','弘治、张鑫典、孙大超 ','华文出版社 ','在架'),('S-25','什么是真正的领导','李艾柯卡','中信出版社','在架'),('S-26','深入理解计算机系统（原书第2版）','（美）布莱恩特，奥哈拉伦 著','机械工业出版社','借出'),('S-27','深入浅出设计模型','FreeMan','东南大学出版社','在架'),('S-28','三毛典藏全集-流星雨','三毛','北京十月文艺出版社','在架'),('S-29','三毛典藏全集-雨季不再来','三毛','北京十月文艺出版社','在架'),('S-3','算法精解:C语言描述','肖翔 (译者), 陈舸 (译者)','机械工业出版社','在架'),('S-30','三毛典藏全集-撒哈拉的故事','三毛','北京十月文艺出版社','在架'),('S-31','三毛典藏全集-稻草人手记','三毛','北京十月文艺出版社','在架'),('S-32','三毛典藏全集-温柔的夜','三毛','北京十月文艺出版社','在架'),('S-33','三毛典藏全集-梦里花落知多少','三毛','北京十月文艺出版社','在架'),('S-34','三毛典藏全集-万水千山走遍','三毛','北京十月文艺出版社','在架'),('S-35','三毛典藏全集-送你一匹马','三毛','北京十月文艺出版社','在架'),('S-36','三毛典藏全集-亲爱的三毛','三毛','北京十月文艺出版社','在架'),('S-37','三毛典藏全集-我的宝贝','三毛','北京十月文艺出版社','在架'),('S-38','三毛典藏全集-滚滚红尘','三毛','北京十月文艺出版社','在架'),('S-39','上下五千年（上）','林达汉','少年儿童出版社','借出'),('S-4','Solaris 内核结构','麦克道格','机械工业出版社 ','在架'),('S-40','圣经故事古希腊神话故事古罗马神话故事大全集','博文　主编 ',' 华文出版社','在架'),('S-41','睡在悬崖上的人','易思婷 ','同心出版社 ','在架'),('S-42','史玉柱自述：我的营销心得','史玉柱 ','同心出版社 ','在架'),('S-43','生活中的经济学（第三版）','茅于轼','暨南大学出版社 ','在架'),('S-44','失控：全人类的最终命运和结局','凯文 凯利 著，东西文库　译','新星出版社','在架'),('S-45','30岁前的每一天','水湄物语','中国商业出版社','在架'),('S-46','思考的艺术(原书第10版)','文森特.赖安.拉吉罗(Vincent Ryan Ruggiero)','机械工业出版社        ','在架'),('S-47','圣经的故事','[美]亨德里克 威廉 房龙 ','武汉出版社 ','在架'),('S-48','Solaris操作系统原理','陈向群等编著','机械工业出版社 ','借出'),('S-49','宋词三百首详注   ','李华 编著 ',' 百花洲文艺出版社','在架'),('S-5','Shell脚本学习指南 ','（美）罗宾,（美）比博 著 O Reilly Taiwan公司 译 ',' 机械工业出版社','借出'),('S-50','三国演义（共两册）','罗贯中','人民文学出版社','在架'),('S-51',' 隋唐英雄志','梅毅','江西人民出版社','在架'),('S-52','上下五千年（下）','林汉达','少年儿童出版社','借出'),('S-53','世界国家地理地图','《世界国家地理地图》编委会','中国大百科全书出版社','在架'),('S-54','世纪旅人','（阿根廷）安 德烈斯?纽曼　著，徐蕾　 译 ','文学新读馆','在架'),('S-55','社会心理学','（美）戴维?迈尔斯，[美]格里格，津巴多 著','HarperCollins UK','在架'),('S-56','世界与你无关 ','丁丁张','中信出版社 ','在架'),('S-57','书法指南','俞剑华','当代中国出版社','在架'),('S-58','世界文明史-东方的遗产','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-59','世界文明史-伏尔泰时代','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-6','深入理解计算机系统（原书第2版）','（美）布莱恩特，奥哈拉伦 著','机械工业出版社','借出'),('S-60','世界文明史-恺撒与基督','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-61','世界文明史-理性开始的时代','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-62','世界文明史-路易十四时代','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-63','世界文明史-宗教改革','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-64','世界文明史-希腊的生活','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-65','世界文明史-文艺复兴','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-66','世界文明史-卢梭与大革命（上下册)','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-67','世界文明史-拿破仑时代（上下册）','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-68','世界文明史-信仰的时代（上下册）','（美）杜兰特?等著，台湾幼狮文化?译 ','华夏出版社 ','在架'),('S-69','瞬变','奇普?希思、丹?希思','中信出版社 ','在架'),('S-7','数学之美','吴军','人民邮电出版社','在架'),('S-70','时间管理??如何充分利用你的24小时','吉姆?兰德尔','上海交通大学出版社','在架'),('S-71','视觉之旅：神奇的化学元素(彩色典藏版)','格雷','人民邮电出版社','在架'),('S-72','斯里兰卡（2013年全新版）','澳大利亚Lonely Planet公司','中国地图出版社','借出'),('S-73','苏菲的世界 ','（挪）贾德　著 ','作家出版社','在架'),('S-74','深深的纸牌屋','姜得祺　著','江苏文艺出版社 ','在架'),('S-8','数学聊斋','王树和','科学出版社','在架'),('S-9','守望的距离','周国平 著','湖南人民出版社','在架'),('T-1','突然就走到了西藏','陈坤','华东师范大学出版社','在架'),('T-10','泰国攻略','《全球攻略》编写组　','中国旅游出版社','在架'),('T-11','听园（晚明传奇中的园林印象）','肖伊绯 著','金城出版社','在架'),('T-12','泰国岛屿和海滩（2013年全新版）','澳大利亚Lonely Planet公司','中国地图出版社','在架'),('T-13','特斯拉自传','（美）特斯拉 ','北京时代华文书局 ','在架'),('T-2','唐师曾一个人的远行 ','唐师曾 ','中国人民大学出版社 ','在架'),('T-3','探险与盗宝 ','王兰平、奉继华 ','民族出版社 ','在架'),('T-4','图说中国抗日战争史：1931-1945 ','张宪文、曹大臣 ','学林出版社 ','借出'),('T-5','偷影子的人','法 马克 李维','湖南文艺出版社 ','在架'),('T-6','天路历程 ','','','在架'),('T-7','The Lord of the Rings 3 Volume Box Set ','约翰 罗纳德 瑞尔 托尔金 ','HarperCollins UK ','借出'),('T-8','The Hobbit','约翰 罗纳德 瑞尔 托尔金 ','HarperCollins UK ','在架'),('T-9','天堂的证据','【美】埃本 亚历山大 著 ','百花洲文艺出版社 ','在架'),('U-1','UNIX系统编程','罗宾斯 (Robbins K.A.) (作者), 陈涓 , 赵振平 译 ','机械工业出版社','借出'),('U-2','UML面向对象建模与设计','Michael Blaha, James Rumbaugh','人民邮电出版社','在架'),('w-1','我的奋斗―罗斯福自传','罗斯福 著,孙红译','中国长安出版社','在架'),('w-10','武士道 ','新渡户稻造 ','商务印书馆 ','在架'),('w-11','万古江河','许倬云','上海文艺出版社','在架'),('W-12','万物简史（彩图珍藏版)','（美）布莱森','接力出版社','在架'),('W-13','王小波时代四部曲-青铜时代','王小波','陕西师范大学出版社','在架'),('W-14','王小波时代四部曲-白银时代','王小波','陕西师范大学出版社','在架'),('W-15','王小波时代四部曲-黄金时代','王小波','陕西师范大学出版社','在架'),('W-16','王小波时代四部曲-黑铁时代','王小波','陕西师范大学出版社','在架'),('W-17','吴敬琏传,一个中国经济学家的肖像','吴晓波','中信出版社 ','在架'),('W-18','为什么读经典','伊塔罗 卡尔维诺','译林出版社','在架'),('W-19','乌合之众 ','(法)古斯塔夫.勒庞 ','中央编译出版社','在架'),('w-2','沃顿商学院最受欢迎的谈判课','戴蒙德 ','中信出版社','借出'),('W-20','我最想要的化妆书1','（韩）边惠玉 ','广西科学技术出版社','在架'),('W-21','我最想要的化妆书2','（韩）边惠玉 ','广西科学技术出版社','在架'),('W-22','我们怎样读书','范寿康','当代中国出版社','在架'),('W-23','吴三桂与甲申之变',' 林奎成','知识产权','在架'),('W-24','我与地坛（纪念版）  ','史铁生 ','人民文学出版社 ','在架'),('W-25','五千年犹太文明史','（英）马丁?吉尔伯特　 ','上海三联书店 ','借出'),('w-3','哇！救命书','（美）薛伍德 ','中国人民大学出版社 ','在架'),('w-4','吾国及吾民','林语堂','湖南文艺出版社 ','在架'),('w-5','唯心有物王阳明正传 ','赵家三郎','江苏人民出版社','在架'),('w-6','王二的经济学故事 ','郭凯','浙江人民出版社','在架'),('w-7','完全自游澳大利亚','墨刻编辑部','科学出版社','在架'),('w-8','802.11无线网络权威指南（影印版）','Matthew S.Bast ','东南大学出版社','在架'),('w-9','王家卫的映画世界','潘国灵,李照兴','百花文艺出版社','在架'),('x-1','下一代的竞争力--美国麻省理工学院中国总面试官的教子手记','蒋佩蓉','漓江出版社','在架'),('x-10','信主独一：伊斯兰教 ','张文建 ','世界知识出版社 ','在架'),('x-11','细说民国创立 ','黎东方 ','上海人民出版社 ','在架'),('x-12','XML编程技术大全','未知','清h华大学出版社','在架'),('X-13','行为心理学   ','龙春华　著','中国华侨出版社','在架'),('X-14','西尔斯亲密育儿百科','威廉 西尔斯,玛莎 西尔斯,罗伯特 西尔斯,詹姆斯 西尔斯  ','南海出版社','在架'),('X-15','湘行散记','沈从文','长江文艺出版社','在架'),('X-16','小逻辑','黑格尔','商务印书馆 ','在架'),('X-17','西藏生死书','索甲仁波切　','浙江大学出版社 ','在架'),('X-18','西方美术简史','[美]亨德里克 威廉 房龙 ','吉林文史出版社 ','在架'),('X-19','写给大家的中国美术史','蒋勋　','湖南美术出版社','在架'),('x-2','信息检索:算法与启发式方法','张华平 (译者), 李恒训 (译者), 刘治华 (译者)','人民邮电出版社','在架'),('X-20','像艺术家一样思考','贝蒂','北方文艺出版社','在架'),('X-21','小王子','（法）圣艾修伯里 ','外文出版社','在架'),('X-22','兄弟','余华','作家出版社','在架'),('X-23','洗澡之后','杨绛 ','人民文学出版社 ','在架'),('X-24','心理学与生活','（美）戴维?迈尔斯，[美]格里格，津巴多 著','HarperCollins UK','在架'),('X-25','幸福国的故事','多克托罗　','上海文艺出版社','在架'),('X-26','向前一步','Sheryl Sandberg ','中信出版社 ','在架'),('X-27','夏洛的网','（美）E?B?怀特　著','上海译文出版社','在架'),('X-28','相约星期二 ','（美）阿尔博姆　著','上海译文出版社','在架'),('x-3','辛亥革命图史','王兴科 ','湖北美术出版社','在架'),('x-4','许倬云说历史套装','许倬云','','在架'),('x-5','笑什么笑,我们搞的是科学','马克-亚伯拉罕斯（Marc Abrahams）','浙江大学出版社','在架'),('x-6','现代操作系统（英文版  第三版）','Anderw S.Tanenbaum','机械工业出版社','在架'),('x-7','系统分析与设计','萨茨辛格 (Satzing.)(Jakn.R.),伯德 (Burd.S.)著 耿志强,朱宝,李芳 译','机械工业出版社','在架'),('x-8','项目管理之美','博克顿 Berkun.S. (作者), 李者), 黄明军 (译者) ','机械工业出版社','在架'),('x-9','熊彼特传','安奈特-舍尔佛 著  刘斌,黄莎莉 译 ','机械工业出版社','在架'),('Y-1','意志力','罗伊-鲍迈斯特,约翰-蒂尔尼 著  丁丹 译','中信出版社','在架'),('Y-10','英国-目击者旅游指南','未知','中国旅游出版社','在架'),('Y-11','一学就会！70道最经典的法国甜点','(法）梅斯','漓江出版社','在架'),('Y-12','演说之禅：职场必知的幻灯片秘技','雷纳德 ，|b|Reynolds','电子工业出版社','在架'),('Y-13','越南','（英）詹姆斯 沙利文　著，（英）克里斯 摄，马艳玲　译','旅游教育出版社','在架'),('Y-14','云计算安全：架构、战略、标准与运营','温克勒　著','机械工业出版社','借出'),('Y-15','云计算与分布式系统：从并行处理到物联网','（美）黄铠，（美）福克斯，（美）唐加拉','机械工业出版社','借出'),('Y-16','杨荫杭集（上册）','杨绛 ','中华书局 ','在架'),('Y-17','杨荫杭集（下册）','杨绛 ','中华书局 ','在架'),('Y-18','印象派全景','上海博物馆','北京大学出版社','借出'),('Y-19','鱼羊野史1','高晓松','湖南文艺出版社','借出'),('Y-2','影响力','罗伯特-西奥迪尼','万卷出版公司 ','在架'),('Y-20','鱼羊野史2 ','高晓松','湖南文艺出版社','在架'),('Y-21','1984','乔治?奥威尔 ','中国画报出版社 ','在架'),('Y-22','一个人与这个时代','邹煜　整理','上海交通大学出版社','在架'),('Y-23','阅读的力量 ','（美）克拉生　 著',' 新疆青少年出版社','在架'),('Y-24','应许之日','辛夷坞　','百花洲文艺出版社 ','在架'),('Y-25','遇见,终不能幸免','梅子黄时雨','百花洲文艺出版社 ','在架'),('Y-3','遇见未知的自己','张德芬','湖南文艺出版社','在架'),('Y-4','玉器时代','艾丹','中国青年出版社','在架'),('Y-5','药师经的济世观','南怀瑾','复旦大学出版社','在架'),('Y-6','原本大学微言','南怀瑾','复旦大学出版社','在架'),('Y-7','于丹《论语》心得 ','于丹 ','中华书局 ','在架'),('Y-8','伊斯兰教文化150问 ','金宜久','东方出版社 ','在架'),('Y-9','月之阴暗面：人类首次登月 ','时间档案编委会 ','地震出版社 ','在架'),('Z-1','中国国家地理美丽的地球-欧洲','（意大利）弗兰科-安德昂 ','中国大百科全书出版社 ','在架'),('Z-10','走遍全球-美国','未知','中国旅游出版社','在架'),('Z-11','在欧洲-逛市集','韩良忆','上海人民出版社','在架'),('Z-12','中国自助游','王怀宝','山东省地图出版社','在架'),('Z-13','在苍茫中点灯','陈春花 ','机械工业出版社','在架'),('Z-14','中国怎么办','时寒冰 ','机械工业出版社','在架'),('Z-15','怎样打羽毛球','王家宏,施志社','苏州大学出版社','借出'),('Z-16','怎样打乒乓球','周建军','苏州大学出版社','在架'),('Z-17','《周易》经传十五讲','廖名春','北京大学出版社','在架'),('Z-18','哲学修养十五讲','孙正聿','北京大学出版社','在架'),('Z-19','中国美学十五讲','朱良志','北京大学出版社','在架'),('Z-2','追风筝的人','（美）胡塞尼（Hosseini,K.) 著,李继宏 译','上海人民出版社','在架'),('Z-20','政治学十五讲','燕继荣','北京大学出版社','在架'),('Z-21','宗教学基础十五讲','王晓朝','北京大学出版社','在架'),('Z-22','中国传统文化十五讲','龚鹏程','北京大学出版社','在架'),('Z-23','中国历代政治得失','钱穆','三联书店','在架'),('Z-24','周作人的最后22年','耿传明','中国文史出版社','在架'),('Z-25','中国的男人和女人 ','易中天 ','上海文艺出版社 ','在架'),('Z-26','走遍全球：希腊、塞浦路斯 ','未知','中国旅游出版社 ','借出'),('Z-27','走遍全球：北欧 ','未知','中国旅游出版社 ','在架'),('Z-28','走遍全球：夏威夷 ','未知','中国旅游出版社 ','在架'),('Z-29','中亚五国史纲 ','马大正,冯锡时 ','新疆人民出版社 ','在架'),('Z-3','做自己的按摩师','山田光敏 ','辽宁科学技术出版社 ','在架'),('Z-30','中国命研究 ','李敖 ','中国友谊出版公司 ','在架'),('Z-31','中国伊斯兰教基础知识 ','秦惠彬 主编 ','宗教文化出版社 ','在架'),('Z-32','资治通鉴（第四辑）南北分立 ','司马光 著 柏杨 译 ','北岳文艺出版社 ','在架'),('Z-33','赵林谈文明冲突与文化 ','赵林 ','东方出版社 ','在架'),('Z-34','纵横十六国 ','陈羡 ','重庆出版社 ','在架'),('Z-35','朱元璋传 ','吴晗 ','人民出版社 ','在架'),('Z-36','再说长江 ','未知','上海科学技术文献出版社 ','在架'),('Z-37','正能量','（英）理查德-怀斯曼民','湖南文艺出版社','借出'),('Z-38','这个历史挺靠谱 全三册','袁腾飞','武汉出版社','借出'),('Z-39','只有医生知道   ','张羽　著','江苏人民出版社','在架'),('Z-40','在厨房遇见MASA','MASA','河南科学技术出版社','在架'),('Z-41','再不远行，就老了','王泓人　 ','中国华侨出版社 ','在架'),('Z-42','走吧，张小砚','张小砚 ','文化艺术出版社 ','在架'),('Z-43','中国人的焦虑从哪里来,论财富与地位的不平等','茅于轼 ','群言出版社 ','在架'),('Z-44','自然的魔法 ','理查德 道金斯','湖南科学技术出版社; ','在架'),('Z-45','中国人史纲（套装上下册）','柏杨','人民文学出版社','在架'),('Z-46','植物绘：38种梦幻植物的色铅笔图绘','飞乐鸟　著','水利水电出版社','借出'),('Z-47','中国哲学简史','冯友兰　','北京大学出版社 ','在架'),('Z-48','正能量2','啦啦啦','吼吼吼','在架'),('Z-49','最好的时光在路上','郭子鹰 ','中国大百科全书出版社','在架'),('Z-50','自在台湾','陈斌华 著','中国大百科全书出版社','借出'),('Z-51','中国地图、世界地图','邸香平，黄玉玲　','中国地图出版社','在架'),('Z-52','在痛苦的世界中尽力而为','俞敏洪','当代中国出版社','在架'),('Z-53','中国国家地理地图','中国国家地理地图编委会','中国大百科全书出版社','借出'),('Z-54','自由选择','（美）米尔顿弗里德曼，（美）罗丝D.弗里德曼　著 ','机械工业出版社','在架'),('Z-55','左手的掌纹','余光中','江苏文艺出版社 ','在架'),('Z-56','长大不容易','卢勤','长江文艺出版社','借出'),('Z-57','自由的伦理','（美）穆瑞?罗斯巴德　著，吕炳斌　等译','复旦大学出版社','在架'),('Z-58','周易今注今译','南怀瑾','重 庆出版社 ','在架'),('Z-59','最后的闺秀','张 允和 ','生 活.读书.新知三联书店 ','在架'),('Z-6','自然光人像摄影指南 ','未知','人民邮电出版社 ','在架'),('Z-60','这一辈子','季羡林 ','中央编译出版社 ','在架'),('Z-61','在新疆','\r\n刘亮程 ','春风文艺出版社','在架'),('Z-62','植物知道生命的答案','丹尼尔 查莫维茨','长江文艺出版社','在架'),('Z-63','自然史','（法）布封','江苏人民出版社','在架'),('Z-64','这次不一样:八百年金融危机史(珍藏版)','（美）莱因哈特，（美）罗格夫','机械工业出版社','在架'),('Z-65','自由','乔纳森?弗兰岑 ','南海出版社','在架'),('Z-66','自由在高处','熊培云 ','新星出版社','在架'),('Z-67','哲学的故事','威尔? 杜兰特 ','新星出版社','在架'),('Z-68','中国高速公路及城乡公路网里程地图集','中图北斗 ','中国地图出版社 ','在架'),('Z-69','最美的教育最简单','尹建莉　','作家出版社 ','在架'),('Z-7','中国通史（上下册）','傅乐成 ','贵州教育出版社 ','在架'),('Z-70','新国际商务英语写作（中级）','何光明','上海教育出版社','在架'),('Z-71','细说汉字―1000个汉字的起源与演变','左民安','九州出版社','在架'),('Z-72','科学简史','林成滔','中国友谊出版公司','在架'),('Z-8','自控力','麦格尼格尔','印刷工业 出版社','在架'),('Z-9','走遍全球-加拿大','未知','中国旅游出版社','在架');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-31 10:42:04
