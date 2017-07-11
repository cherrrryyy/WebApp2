<?php

if (isset($_REQUEST['topic'])){
	$topic = $_REQUEST['topic'];
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
<body style="margin: 40px 150px 40px 150px">

<?php

if ($topic == "TPS"){
	echo "
	<b>TPS: Transaction Processing System</b>
	<br><br>
	A Transaction Processing System (TPS) is a type of information system that collects,
	stores, modifies and retrieves the data transactions of an enterprise. 
	<br><br>
	A transaction is any event that passes the ACID test in which data is 
	generated or modified before storage in an information system.
	
	";
}else if ($topic == "DSS"){
		echo "
		<b>DSS: Decision Support System</b>
		<br><br>
		A computer-based information system that supports business or organizational 
		decision-making activities. DSSs serve the management, operations, and planning 
		levels of an organization (usually mid and higher management) and help people make 
		decisions about problems that may be rapidly changing and not easily specified in advance—i.e. 
		Unstructured and Semi-Structured decision problems. Decision support systems can be either fully 
		computerized, human-powered or a combination of both.
		<br><br>
		While academics have perceived DSS as a tool to support decision making process, 
		DSS users see DSS as a tool to facilitate organizational processes.Some authors have extended 
		the definition of DSS to include any system that might support decision making and some DSS include 
		a decision-making software component; Sprague (1980)defines a properly termed DSS as follows:
		<br><br>
		1. DSS tends to be aimed at the less well structured, underspecified problem that upper level managers typically face;
		<br>
		2. DSS attempts to combine the use of models or analytic techniques with traditional data access and retrieval functions;
		<br>
		3. DSS specifically focuses on features which make them easy to use by non-computer-proficient people in an interactive mode; and
		<br>
		4. DSS emphasizes flexibility and adaptability to accommodate changes in the environment and the decision making approach of the user.
		";

}else if ($topic == "ES"){
	echo"
	<b>ES: Expert System</b>
	<br><br>
	A computer system that emulates the decision-making ability of a human expert.
	Expert systems are designed to solve complex problems by reasoning about knowledge,
	represented mainly as if–then rules rather than through conventional procedural code.
	The first expert systems were created in the 1970s and then proliferated in the 1980s.
	Expert systems were among the first truly successful forms of artificial intelligence (AI) software.
	<br><br>
	An expert system is divided into two subsystems: the inference engine and the knowledge base. 
	The knowledge base represents facts and rules. The inference engine applies the rules to the 
		known facts to deduce new facts. Inference engines can also include explanation and debugging abilities
	";
}else if ($topic == "1st_Lower"){
	echo"
	<b>Levels of Information System</b>
	<br><br>
	<center><img src='1.jpg' width='800'></center>
	";

}else if ($topic == "Tier_1"){
	echo"
	<b>Tier 1 - Database Tier</b>
	<br><br>
	There is no authority that defines tiers of networks participating in the Internet.
	However, the most common and well-accepted definition of a tier 1 network is a network 
	that can reach every other network on the Internet without purchasing IP transit or paying for peering.
	By this definition, a tier 1 network must be a transit-free network (purchases no transit) that peers for 
	free with every other tier 1 network. Not all transit-free networks are tier 1 networks, as it is possible to 
	become transit-free by paying for peering.
	<br><br>
	The most widely quoted source for identifying tier 1 networks is published by Renesys Corporation,
	but the base information to prove the claim is publicly accessible from many locations, such as the 
	RIPE RIS database,[the Oregon Route Views servers, Packet Clearing House, and others.
	<br><br>
	It is difficult to determine whether a network is paying for peering or transit as these business
	agreements are rarely public information, or are covered under a non-disclosure agreement. 
	The Internet peering community is roughly the set of peering coordinators present at the Internet 
	exchange points on more than one continent. The subset representing tier 1 networks is collectively
	understood in a loose sense, but not published as such.
	";
}else if ($topic == "Tier_2"){
	echo"
	<b>Tier 2 - Application Tier</b>
	<br><br>
	The logical tier is pulled out from the presentation tier and, as its own layer, it controls an application’s functionality by performing detailed processing.
	";
}else if ($topic == "Tier_3"){
	echo"
	<b>Tier 3 - Client Tier</b>
	<br><br>
	This is the topmost level of the application. The presentation tier displays information related to such services as browsing merchandise, 
	purchasing and shopping cart contents. It communicates with other tiers by which it puts out the results to the browser/client tier and all 
	other tiers in the network. In simple terms, it is a layer which users can access directly (such as a web page, or an operating system's GUI).

	";
}else if ($topic == "IS"){
	echo"
	<b>IS Infrastructure</b>
	<br><br>
	<center><img src='2.png' width='500'></center>
	<br><br>
	Infrastructure is the foundation or framework that supports a system or organization. In computing, 
	infrastructure is composed of physical and virtual resources that support the flow, storage, 
	processing and analysis of data. Infrastructure may be centralized within a data center, 
	or it may be decentralized and spread across several data centers that are either controlled by 
	the organization or by a third party, such as a colocation facility or cloud provider.
	<br><br>
	In a data center, infrastructure includes the power, cooling and building elements necessary 
	to support hardware. On the internet, infrastructure also includes transmission media, such as cables,
	 satellites, antennas, routers, aggregators, repeaters and other network components that control transmission paths. 
	 Cloud computing provides a flexible IT infrastructure in which resources can be added and removed as workloads change. 
	 In an Infrastructure as a Service (IaaS) model, a third-party provider hosts hardware, software, servers, 
	 storage and other infrastructure components on behalf of its users.
	";
}else if ($topic == "blog"){
	echo"
		<b>Blog</b>
		<br><br>
		<center><img src='3.png' width='500'></center>
		<br><br>
		A blog (a truncation of the expression weblog) is a discussion or informational website published on 
		the World Wide Web consisting of discrete, often informal diary-style text entries (posts). Posts are 
		typically displayed in reverse chronological order, so that the most recent post appears first, at the 
		top of the web page. Until 2009, blogs were usually the work of a single individual,[citation needed] 
		occasionally of a small group, and often covered a single subject or topic. In the 2010s, multi-author blogs
		(MABs) have developed, with posts written by large numbers of authors and sometimes professionally edited. 
	    MABs from newspapers, other media outlets, universities, think tanks, advocacy groups, and similar institutions 
	    account for an increasing quantity of blog traffic. The rise of Twitter and other microblogging systems helps 
		integrate MABs and single-author blogs into the news media. Blog can also be used as a verb, meaning to maintain or add content to a blog.

	";
}else if ($topic == "email"){
	echo"
	<b>Email</b>
	<br><br>
	<center><img src='4.jpg' width='500'></center>
	<br><br>
	Electronic mail (email) is a method of exchanging messages between people using electronics. 
	Email first entered substantial use in the 1960s and by the mid-1970s had taken the form now 
	recognized as email. Email operates across computer networks, which today is primarily the 
	Internet. Some early email systems required the author and the recipient to both be online 
	at the same time, in common with instant messaging. Today's email systems are based on a 
	store-and-forward model. Email servers accept, forward, deliver, and store messages. 
	Neither the users nor their computers are required to be online simultaneously; they need 
	to connect only briefly, typically to a mail server or a webmail interface, 
	for as long as it takes to send or receive messages.

	";
}
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>