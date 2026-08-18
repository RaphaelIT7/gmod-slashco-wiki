<title>FogInfo</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.AddFog</page>
	</description>
	<fields>
		<item name="name" type="string">
			Name used to identify the fog entry.
			Player and team fog entries automatically have a suffix appended to this name.
		</item>
		<item name="fogType" type="number">
			Type of fog. Use one of the values from <page>SlashCo.FogType</page>.
		</item>
		<item name="priority" type="number" default="0" optional>
			Priority of the fog entry. Higher priority entries take precedence over lower priority entries.
		</item>
		<item name="multiplier" type="number" optional>
			Multiplier applied to the fog start and end distances.
		</item>
		<item name="worldColorR" type="number" optional>
			Red component of the fog's world color.
		</item>
		<item name="worldColorG" type="number" optional>
			Green component of the fog's world color.
		</item>
		<item name="worldColorB" type="number" optional>
			Blue component of the fog's world color.
		</item>
		<item name="worldColorScaleR" type="number" optional>
			Multiplier applied to the red component of the world color.
		</item>
		<item name="worldColorScaleG" type="number" optional>
			Multiplier applied to the green component of the world color.
		</item>
		<item name="worldColorScaleB" type="number" optional>
			Multiplier applied to the blue component of the world color.
		</item>
		<item name="entity" type="Entity" optional>
			Player entity targeted by player-specific fog.
			Required when `fogType` is <page>SlashCo.FogType.PLAYER</page>.
		</item>
		<item name="team" type="number" optional>
			Team targeted by team-specific fog.
			Required when `fogType` is <page>SlashCo.FogType.TEAM</page>.
		</item>
	</fields>
</structure>