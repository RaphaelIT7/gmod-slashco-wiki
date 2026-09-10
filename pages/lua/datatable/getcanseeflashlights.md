<function name="GetCanSeeFlashlights" parent="Player" type="classfunc">
	<description>
		Returns the player's base "can see flashlights" state.<br>
		Item and slasher overrides may still take precedence - use <page>Player:CanSeeFlashlights</page> for that.<br>
		This function is created by the <page text="DTVar Networking System">DTVar Networking</page> system.
	</description>
	<realm>Shared</realm>
	<rets>
		<ret name="canSee" type="boolean" default="true">Whether the player can see flashlights.</ret>
	</rets>
</function>