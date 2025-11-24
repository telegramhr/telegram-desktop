/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InspectorControls } from "@wordpress/block-editor";
import { PanelBody, TextControl } from "@wordpress/components";
import Youtube from "./assets/youtube.svg";
import Spotify from "./assets/spotify.svg";
import ApplePodcasts from "./assets/apple-podcasts.svg";
import RandomPlatformIcon from "./assets/random-platform.svg";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

export default function Edit({ attributes, setAttributes }) {
	const { link1, link2, link3, link4 } = attributes;

	const blockProps = useBlockProps({
		className: "podcast-platforms-editor",
	});
	const hasLinks = link1 || link2 || link3 || link4;

	return (
		<>
			{/* Sidebar Settings */}
			<InspectorControls>
				<PanelBody
					title={__("Podcast platform links", "podcast-platforms")}
					initialOpen={true}
				>
					<TextControl
						label={__("Youtube URL", "podcast-platforms")}
						value={link1}
						onChange={(value) => setAttributes({ link1: value })}
						placeholder="https://youtube.com/..."
					/>

					<TextControl
						label={__("Spotify URL", "podcast-platforms")}
						value={link2}
						onChange={(value) => setAttributes({ link2: value })}
						placeholder="https://spotify.com/..."
					/>

					<TextControl
						label={__("Apple Podcasts URL", "podcast-platforms")}
						value={link3}
						onChange={(value) => setAttributes({ link3: value })}
						placeholder="https://podcasts.apple.com/..."
					/>

					<TextControl
						label={__("Svugdje URL", "podcast-platforms")}
						value={link4}
						onChange={(value) => setAttributes({ link4: value })}
						placeholder="https://example.com"
					/>
				</PanelBody>
			</InspectorControls>

			<div className="main" {...blockProps}>
				{hasLinks ? (
					<div className="podcasts-wrapper">
						{link1 && (
							<a
								href={link1}
								target="_blank"
								rel="noopener noreferrer"
								className="podcast-box youtube"
							>
								<img src={Youtube} alt="Youtube" />
								<div className="text-wrapper">
									<p>Slušaj na</p>
									<span>Youtube</span>
								</div>
							</a>
						)}
						{link2 && (
							<a
								href={link2}
								target="_blank"
								rel="noopener noreferrer"
								className="podcast-box spotify"
							>
								<img src={Spotify} alt="Spotify" />
								<div className="text-wrapper">
									<p>Slušaj na</p>
									<span>Spotify</span>
								</div>
							</a>
						)}
						{link3 && (
							<a
								href={link3}
								target="_blank"
								rel="noopener noreferrer"
								className="podcast-box apple"
							>
								<img src={ApplePodcasts} alt="Apple Podcasts" />
								<div className="text-wrapper">
									<p>Slušaj na</p>
									<span>Apple Podcasts</span>
								</div>
							</a>
						)}
						{link4 && (
							<a
								href={link4}
								target="_blank"
								rel="noopener noreferrer"
								className="podcast-box random"
							>
								<img src={RandomPlatformIcon} alt="Svugdje" />
								<div className="text-wrapper">
									<p>Slušaj</p>
									<span>Svugdje</span>
								</div>
							</a>
						)}
					</div>
				) : (
					<div className="nothing">
						<p>Unesite linkove za prikaz platformi</p>
					</div>
				)}
			</div>
		</>
	);
}
