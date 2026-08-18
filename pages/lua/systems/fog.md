<title>Fog</title>

# Fog
SlashCo has a clientside fog system which dynamically changes the fog based on the player's environment and location.<br>
Fog can be configured globally, for a specific team, or for an individual player using <page>SlashCo.AddFog</page>. Fog entries can be removed using <page>SlashCo.RemoveFog</page>.<br>
The fog system uses <page>SlashCo.FogType</page> to determine which players an entry applies to.<br>

## Fog Types
There are three fog types:<br>
- <page text="SlashCo.FogType.GLOBAL">SlashCo.FogType</page> - Applies to all players.<br>
- <page text="SlashCo.FogType.TEAM">SlashCo.FogType</page> - Applies to players on a specific team.<br>
- <page text="SlashCo.FogType.PLAYER">SlashCo.FogType</page> - Applies to a specific player.<br>

When multiple fog entries apply to a player, the entry with the highest priority is used.<br>

## Dynamic Fog
The base fog distance is dynamically adjusted based on the player's surroundings.<br>
There are three primary fog stages:<br>

**Outside:**<br>
When the player has visibility to the skybox, the fog allows a greater view distance.<br>

**Inside Building:**<br>
When the player is inside a building while the outside light is still reachable, the fog distance is reduced.<br>

**Underground:**<br>
When the player cannot see the skybox, such as inside a basement, the fog closes in further and significantly reduces the view distance.<br>

The final fog distance is also always affected by the lighting at the player's position.<br>

## Fog Multipliers
A fog entry can specify a `multiplier` using <page>SlashCo.AddFog</page>. This multiplier is applied to the dynamically calculated fog start and end distances.<br>
A multiplier greater than `1` increases the fog distance, while a multiplier less than `1` brings the fog closer.

## Fog Colors
Fog entries can optionally modify the world fog color using:<br>
- `worldColorR`<br>
- `worldColorG`<br>
- `worldColorB`<br>

Color scaling can additionally be controlled using:<br>
- `worldColorScaleR`<br>
- `worldColorScaleG`<br>
- `worldColorScaleB`<br>

The final color is calculated by multiplying each color component by its corresponding color scale.

## Spectators
Spectators inherit the fog settings of the player they are currently spectating.<br>
If a spectator is not spectating a valid player, they receive a fog multiplier of `100`, effectively giving them very little fog.<br>

## Disabling Global Fog
When global fog is disabled through <page>SlashCo.IsGlobalFogDisabled</page>, the normal dynamic fog distances are replaced with extremely large distances, effectively disabling the environmental fog.<br>

## Example

<code language="lua">
SlashCo.AddFog({
	name = "Example",
	fogType = SlashCo.FogType.GLOBAL,
	priority = 10,
	multiplier = 0.5,
	worldColorR = 100, 
	worldColorG = 120,
	worldColorB = 140
})
</code>