FILE HANDLING IN PHP:

FIle can be opende in any of the following modes:
."w" - Opens a file for write only. If file not exist then new file is created and if file already exists then contents of file erased.
."r" - File is opened for read only.
."a" - File is opened for write only. File pointer points to end of file. Existing data in file is preserved.
."w+" - Opens file for read and write. If file not exist then new file is created and if file already exist then contents of file is erased.
."r+" - File is opened for read or write.
."a+" - File is opened for read or write. File pointer points to end of file. Existing data is preserved. If file is not there then new file is created.
."x" - New file is created for write only.

//touch("test.txt");    Creating new txt file
//unlink("test.txt");   deleting files
//mkdir("test");        creating new folder
//rmdir("test");        deleting the folder
//copy("text.txt", "abc.txt");   copying multiple files   

