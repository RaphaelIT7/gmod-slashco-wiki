<title>Fog</title>

# Fog
SlashCo has a clientside fog system which dynamically changes the fog based off the environment and their location.<br>
The Fog can be controlled per player using <page>Player:SetFogMult</page> or globally using the <page>SlashCo.SetGlobalFogMult</page> function.

There are three fog stages for distance:<br>
Outside: outside the fog distance increases allowing a player to see further.<br>
Inside Building: Inside a building the fog closes in to reduce view distance.<br>
Underground: Inside a basement, far from the outside the fog further closes in to only allow a short distance view.<br>