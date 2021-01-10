<h1><?= $title ?></h1>

<div class="log-head">
          <?php if(!$this->session->userdata('logged_in')) : ?>
           <button <li><a href="<?php echo base_url(); ?>users/login">Login</a></li></button>
          <?php endif; ?>
      </div>
      <p><h4><center>Installation of  Hadoop</center>
      </h4></p>
      <img src="<?php echo base_url();?>assets\images\posts\1.jpg" >
      <img src="<?php echo base_url();?>assets\images\posts\2.jpg" >
      <img src="<?php echo base_url();?>assets\images\posts\3.jpg" >
      <img src="<?php echo base_url();?>assets\images\posts\4.jpg" >
      <p> 
     
 HDFS has a master/slave architecture. An HDFS cluster consists of a single NameNode, a master server that manages the file system namespace and regulates access to files by clients. In addition, there are a number of DataNodes, usually one per node in the cluster, which manage storage attached to the nodes that they run on. HDFS exposes a file system namespace and allows user data to be stored in files. Internally, a file is split into one or more blocks and these blocks are stored in a set of DataNodes. The NameNode executes file system namespace operations like opening, closing, and renaming files and directories. It also determines the mapping of blocks to DataNodes. The DataNodes are responsible for serving read and write requests from the file system’s clients. The DataNodes also perform block creation, deletion, and replication upon instruction from the NameNode. The existence of a single NameNode in a cluster greatly simplifies the architecture of the system. The NameNode is the arbitrator and repository for all HDFS metadata. The system is designed in such a way that user data never flows through the NameNode.

 </p>
      <img src="<?php echo base_url();?>assets\images\posts\5.jpg" >

  <style>
  	.log-head button{
  float: left;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
p{
	  text-align: justify;
  text-justify: inter-word;
	}
	h1{text-align: center;}

  </style>
        
