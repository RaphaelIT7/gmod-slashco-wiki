<title>Offering</title>
<structure>
	<realm>Shared</realm>
	<description>
		Table structure used for <page>SlashCo.AddOffering</page>
	</description>
	<fields>
		<item name="Name" type="string">Name for the offering</item>
		<item name="Rarity" type="number">
			Rarity, can range from 1 to 3.<br>
			They're currently used only for the sound that is played when they're enabled.
		</item>
		<item name="GasCanMod" type="number" default="0" optional>
			How many GasCans should be added or removed. It is allowed to be a negative number!<br>
		</item>
		<item name="MinimumPlayers" type="number" default="nil" optional>
			How many players are at minimum required for this offering
		</item>
	</fields>
</structure>