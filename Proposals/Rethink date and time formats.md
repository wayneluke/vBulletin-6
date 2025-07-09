Rethink date and time formats.

The current date and time formats don't allow for the breadth of customization that customers desire. See vb6-1030

The following Date / Time Formats should be created in the Date & Time Settings.

Name            Default Format                  Example
----------------------------------------------------------------------------
DateTime 	    MMM-DD-YY hh:mm:ss AM/PM	    Dec-29-11 06:00:00 AM
General Date 	MM/DD/YYYY              	    12/29/2011
Time 	        hh:mm AM/PM                     6:00 AM
Long Date 	    Day of Week, Month DD, YYYY 	Thursday, December 29, 2011
Medium Date 	MMM DD YYYY 	                Dec 29 2011
Short Date 	    MM/DD/YY 	                    12/29/11
Date No Year    MMM DD                          Dec 29
Long Time 	    hh:mm:ss AM/PM 	                6:00:00 AM
Medium Time 	hh:mm AM/PM 	                6:00 AM
Short Time 	    HH:mm 	                        16:00


Once these formats are created, then they can be applied to displayed dates and times in the system instead of specifying a new format for Birthday, Birthday (Without Year), Registrations, Event Dates, Last Post Info Card, Last Post Info List, and anything else the form will be chosen from a dropdown shown in the form of "%Name% (%Format%)". In addition the the vb:datetime formatter should be able to reference these variables to be used line.

