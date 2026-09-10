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

# Registered Variables
Every Get/Set function pair created this way is documented under the **DataTable** category:<br>

- <page>Player:GetExperience</page> / <page>Player:SetExperience</page>
- <page>Player:GetPoints</page> / <page>Player:SetPoints</page>
- <page>Player:GetSurvivorRoundsWon</page> / <page>Player:SetSurvivorRoundsWon</page>
- <page>Player:GetSlasherRoundsWon</page> / <page>Player:SetSlasherRoundsWon</page>
- <page>Player:GetPerception</page> / <page>Player:SetPerception</page>
- <page>Player:GetEyeSight</page> / <page>Player:SetEyeSight</page>
- <page>Player:GetDeafenTime</page> / <page>Player:SetDeafenTime</page>
- <page>Player:GetCanSeePlayers</page> / <page>Player:SetCanSeePlayers</page>
- <page>Player:GetWasSeenBySlasher</page> / <page>Player:SetWasSeenBySlasher</page>
- <page>Player:GetVisible</page> / <page>Player:SetVisible</page> (aliased as <page>Player:IsVisible</page>)
- <page>Player:GetCanSeeFlashlights</page> / <page>Player:SetCanSeeFlashlights</page>
- <page>Player:GetOwnedPerks</page> / <page>Player:SetOwnedPerks</page>
- <page>Player:GetActiveEffects</page> / <page>Player:SetActiveEffects</page>
- <page>Player:GetPickedSlasher</page> / <page>Player:SetPickedSlasher</page>