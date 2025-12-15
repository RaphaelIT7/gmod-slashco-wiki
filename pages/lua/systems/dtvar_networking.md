<title>DTVar Networking</title>

# DTVars
DT = Datatable

A DTVar is a value that is networked using the [Entity:SetDT](https://wiki.facepunch.com/gmod/~search?q=SetDT) function.<br>
The Datatable offers great speed and reliability often networking values faster than [net messages](https://wiki.facepunch.com/gmod/net.Start) though at the cost of being limited and hard coded into the game build.<br>
Garry's Mod offers 32 slots for Floats, Bools, Ints, Entities, Vectors and Angle **but** for strings only 4 slots are available.<br>

# Our DTVar System for Players
We got our own wrapper for creating DTVars with Set/Get functions as Garry's Mod default NetworkVar function sucks.<br>

Inside the `sh_player.lua` we got the function `SetupSlashCoNetworkVar(type, index, name)` which we use to create our DTVars for players.<br>
An example of this is this:
<example>
	<code>
SetupSlashCoNetworkVar("Int", 0, "Experience")
SetupSlashCoNetworkVar("Int", 1, "Points")

-- Now we got these functions created which have their values always networked

Player:SetExperience(number value)
local value = Player:GetExperience(number fallback = 0)
Player:SetPoints(number value)
local value = Player:GetPoints(number fallback = 0)
	</code>
</example>